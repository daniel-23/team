<?php

class Connection {
	public static function connect() {

		try {

			$host = "127.0.0.1";
			$user = "root";
			$password = "Venezuela2020=";
			$database = "team";
			$link = new PDO("mysql:host=$host;dbname=$database", $user, $password);
			return $link;
		}catch (PDOException $e) {
			echo "<pre>";
			#$e->getErrors();
			echo $e->getMessage();
			echo "</pre>";
			#header("location:EBD");
			exit;
		}
	}
}