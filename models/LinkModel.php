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
			$action == "products-edit" ||
			$action == "logout") {
			if (isset($_SESSION['login']) && isset($_SESSION['user']) ) {
				$module = "views/modules/".$action.".php";
			}else{
				$url = APP_ROOT.'/no-login';
				header("location: $url");
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