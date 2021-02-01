<?php
/**
 * 
 */
class LinkModel
{
	public static function getLinkModel($action)
	{
		if ($action == "login") {
			$module = "views/modules/".$action.".php";
		}else if (
			$action == "home" ||
			$action == "products" ||
			$action == "products-create" ||
			$action == "logout") {
			if (isset($_SESSION['login']) && isset($_SESSION['user']) ) {
				$module = "views/modules/".$action.".php";
			}else{
				header("location: no-login");
				exit;
			}
			
		}elseif ($action == "wrong" ||
				 $action == "no-login" ||
				 $action == "bloqueado" || 
				 $action == "EBD" ||
				 $action == "security") {
			$module = "views/modules/login.php";
		}else{
			$module = "views/modules/404.php";
			//header("location: security");exit;
		}
		return $module;
	}
	
	
}