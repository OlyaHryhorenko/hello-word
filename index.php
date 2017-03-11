<?php
session_start();
require_once('user.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$login = strip_tags($_POST['login']);
	$name = strip_tags($_POST['name']);
	$upass = strip_tags($_POST['pass']);	
	
	if($login=="")	{
		$error[] = "username !";	
	}
	else if($upass=="")	{
		$error[] = "password !";
	}
	
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT login, name FROM login WHERE login=:login OR name=:name");
			$stmt->execute(array(':login'=>$login, ':name'=>$name));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['login']==$login) {
				$error[] = "уже есть!";
			}
			else if($row['name']==$name) {
				$error[] = "уже есть!";
			}
			else
			{
				if($user->register($login,$name,$upass)){	
					
					echo "ура! зарегистрировалось";
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Регистрация</title>
<style>
	input {
		display: block;
	}
</style>
</head>
<body>

<div>

<div class="container">	
        <form method="post">
            <h2>Регистрация</h2><hr />
              
            <input type="text" name="login" placeholder="Логин"  />
    
            <input type="text"  name="name" placeholder="Имя" />
            	<input type="password" class="form-control" name="pass" placeholder="Пароль" />
            	<button type="submit" name="btn-signup">
                	зарегистрироватся
                </button>
            <label> <a href="login.php">Войти</a></label>
        </form>
       </div>
</div>

</div>

</body>
</html>