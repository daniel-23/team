<?php
session_start();
//header('Content-type: application/json');

if (isset($_SESSION['login']) && isset($_SESSION['user']) ) {
	require_once "../models/ProductModel.php";

	if (isset($_POST['action'])) {
		
		switch ($_POST['action']) {
			case 'change-img-principal':
				$model = new ProductModel();
				$model->setImgNoPrincipal((int)$_POST['productId']);
				$model->setImgPrincipal((int)$_POST['imgId']);
				echo json_encode(['status' => 'Ok']);
				break;

			case 'delete-image':
				$model = new ProductModel();
				$parts = explode('/',$_POST['path']);
				$nameImg = end($parts);
				unlink('img/products/'.$nameImg);
				$model->deleteImgModel((int)$_POST['imgId']);
				echo json_encode(['status' => 'ok']);
				break;

			case 'upload-image':
				
				if ( $_FILES['images']['error'] === UPLOAD_ERR_OK) {
					$fileTmpPath   = $_FILES['images']['tmp_name'];
					$fileName      = $_FILES['images']['name'];
					$fileSize      = $_FILES['images']['size'];
					$fileType      = $_FILES['images']['type'];
					$fileNameCmps  = explode(".", $fileName);
					$fileExtension = strtolower(end($fileNameCmps));
					$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
					$uploadFileDir = 'img/products/';
					$dest_path = $uploadFileDir . $newFileName;
					if(move_uploaded_file($fileTmpPath, $dest_path))
					{
						$dataImg = [
							'path'       => 'views/'.$dest_path,
							'product_id' => $_POST['productId'],
							'principal'  => 0,
						];
						$model = new ProductModel();
						$imgSave = $model->createProductImageModel($dataImg);
					}
				}
				echo json_encode($dataImg);
				break;

				
			
			default:
				# code...
				break;
		}

		
	}
}else{
	
	exit;
}
	
?>