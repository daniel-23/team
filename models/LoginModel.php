<?php

require_once "Connection.php";

class LoginModel extends Connection
{
	
	public static function getUserModel($email)
	{
		$stmt = Connection::connect()->prepare("SELECT * FROM users WHERE email = :email");
		$stmt->bindParam(":email",$email, PDO::PARAM_STR);
		$stmt->execute();
		$resp = $stmt->fetch();
		return $resp;
	}


	
}