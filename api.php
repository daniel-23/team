<?php
header('Content-type: application/json');
require 'admin/models/ProductModel.php';
$productModel = new ProductModel();
$all = isset($_GET['all']) && $_GET['all'] == '1' ? true : false;



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	switch ($_GET['action']) {
		case 'principal':
			$products = $productModel->getProductsPrincipal($all);
			
			echo json_encode($products);
			break;

		case 'novelty':
			$products = $productModel->getProductsNovelty($all);
			echo json_encode($products);
			break;

		case 'offer':
			$products = $productModel->getProductsOfferts($all);
			echo json_encode($products);
			break;

		case 'p':
			$product = $productModel->getProductEditModel((int)$_GET['id']);
			$product['img'] = $productModel->getProductImagePrincipalModel((int)$_GET['id']);
			$product['images'] = $productModel->getProductImagesNoPrincipalModel((int)$_GET['id']);
			echo json_encode($product);
			break;

		case 'category':
			$data = [];
			$data['categories'] = $productModel->getCategoriesModel();
			$catId = isset($_GET['cat']) ? (int) $_GET['cat'] : $data['categories'][0]['id'];
			$data['products'] = $productModel->getProductsCategory($all,$catId);
			echo json_encode($data);
			break;
		
		default:
			# code...
			break;
	}
}

