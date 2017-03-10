<?php
session_start();
require_once('user.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "username !";	
	}
	else if($upass=="")	{
		$error[] = "password !";
	}
	
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT login, name FROM login WHERE login=:uname OR name=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "уже есть!";
			}
			else if($row['user_email']==$umail) {
				$error[] = "уже есть!";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					
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
              
            <input type="text" name="txt_uname" placeholder="Логин"  />
     
            <input type="text"  name="txt_umail" placeholder="Имя" />
            	<input type="password" class="form-control" name="txt_upass" placeholder="Пароль" />
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