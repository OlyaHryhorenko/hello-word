<?php

require_once('db.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($uname,$umail,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO login(login,name,password) 
		                                               VALUES(:uname, :umail, :upass)");
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	public function doLogin($uname,$upass) {

	$stmt = $this->runQuery('SELECT * FROM login WHERE login = ?');
		$stmt->execute([$uname]);
		while ($row = $stmt->fetch()) {
		    if (! $row) {
		        echo 'no';
		    } else {
		    echo 'Вы авторизировались по логину '. $row['login'].$row['id'].'<br/>';
		    }
		}   
	}
	public function redirect($url)
	{
		header("Location: $url");
	}
	
}
?>