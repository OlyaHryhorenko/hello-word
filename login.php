<?php
session_start();
require_once("user.php");
$login = new USER();

if(isset($_POST['login']))
{
    $uname = strip_tags($_POST['login']);
    $upass = strip_tags($_POST['password']);
        
    $login->doLogin($uname,$upass);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Логин</title>
<style>
    input {
        display: block;
    }
</style>
</head>
<body>
<div class="signin-form">

    <div class="container">
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Форма</h2><hr />
          
        <input type="text"  name="login" placeholder="Логин" required />
        <input type="password" name="password" placeholder="Пароль" />
            <button type="submit"  class="btn btn-default" name="login">
                    </i>Войти
       </button>
            <label><a href="index.php">зарегистрироваться</a></label>
      </form>

    </div>
</div>

</body>
</html>