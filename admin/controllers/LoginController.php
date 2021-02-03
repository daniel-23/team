<?php
/**
 * 
 */
class LoginController
{
	
	public function validateLoginController()
	{
		if (isset($_SESSION['login']) && isset($_SESSION['user']) ) {
			header("location: home");
			exit;
		}

		if (isset($_POST["login"])) {

			$email = strtolower(strip_tags($_POST["email"]));
			$password = $_POST["password"];
			$dataUser = LoginModel::getUserModel($email);
			if (!$dataUser) {
				header("location: wrong");
				exit;
			}
			$pass = new PasswordController();
			//$hash = $pass->HashPassword($password);
			if ( ! $pass->CheckPassword($password,$dataUser["password"])) {
				header("location: wrong");
				exit;
			}

			//Si todo esta bien
			unset($dataUser['password']);
			$_SESSION["login"] = true;
			$_SESSION["user"] = $dataUser;
			header("location: home");
			exit;
		}
	}
}