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
	// 	$stmt = $this->conn->prepare("SELECT id, login, password FROM login WHERE login='оля'");
	// 	$stmt->execute();

		
	// while ($userRow=$stmt->fetch(PDO::FETCH_ASSOC))
	// 	{
	// 	$name = $userRow['login'];
		
	// 	echo $name;
	
	// 	}

	}
	public function redirect($url)
	{
		header("Location: $url");
	}
	
}
?>