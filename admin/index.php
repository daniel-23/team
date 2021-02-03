<?php
session_start();
/**
 * DEFINIR CONSTATNTES
 */
define("APP_ROOT", "/team/admin");

/**
 * CONTROLADORES REQUERIDOS
 */
require_once "controllers/TemplateController.php";
require_once "controllers/LinkController.php";
require_once "controllers/LoginController.php";
require_once "controllers/PasswordController.php";
require_once "controllers/ProductController.php";

/**
 * MODELOS REQUERIDOS
 */
require_once "models/LinkModel.php";
require_once "models/LoginModel.php";
require_once "models/ProductModel.php";


abstract class System
{	
	public static function start()
	{
		$template = new TemplateController();
		$template->getTemplateView();
	}
}
System::start();

