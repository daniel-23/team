<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Team Shop</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= APP_ROOT ?>/views/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= APP_ROOT ?>/views/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<style type="text/css">
		.card-title {
			width: 100%;
		}

		.img-principal {
			background-color: #11d63e;
		}

		.deleteImg {
            
            top:0;
            right:0;
            cursor:pointer;
            width:30px;
            height:30px;
            text-align:center;
            line-height:30px;
            
            z-index:1;
            color:white;
            
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
	</style>
</head>
<?php
	$module = new LinkController();
	include_once $module->getLinkController();
?>
</html>
