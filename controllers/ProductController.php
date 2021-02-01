<?php
/**
 * 
 */
class ProductController
{
	public $productModel;
	function __construct()
	{
		$this->productModel = new ProductModel();
	}
	
	public function getCategoriesController()
	{
		return ProductModel::getCategoriesModel();
	}

	public function postCreateProductController()
	{
		if (isset($_POST['create-product'])) {
			$errors = array();
			$dataProduct = [
				'name'              => strip_tags(trim($_POST['name'])),
				'category_id'       => (int) $_POST['category_id'],
				'short_description' => strip_tags(trim($_POST['short_description'])),
				'long_description'  => strip_tags(trim($_POST['long_description'])),
				'price'				=> (double) filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
				'is_novelty'        => isset($_POST['is_novelty']) ? 1 : 0,
				'is_offer'          => isset($_POST['is_offer']) ? 1 : 0,
				'is_principal'      => isset($_POST['is_principal']) ? 1 : 0,
			];

			$newProductId = $this->productModel->createProductModel($dataProduct);

			for ($i=0; $i < count($_FILES['images']['error']); $i++) { 
				if ( $_FILES['images']['error'][$i] === UPLOAD_ERR_OK) {
					$fileTmpPath   = $_FILES['images']['tmp_name'][$i];
					$fileName      = $_FILES['images']['name'][$i];
					$fileSize      = $_FILES['images']['size'][$i];
					$fileType      = $_FILES['images']['type'][$i];
					$fileNameCmps  = explode(".", $fileName);
					$fileExtension = strtolower(end($fileNameCmps));
					$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
					$uploadFileDir = 'views/img/products/';
					$dest_path = $uploadFileDir . $newFileName;
					if(move_uploaded_file($fileTmpPath, $dest_path))
					{
						$dataImg = [
							'path'       => $dest_path,
							'product_id' => $newProductId,
							'principal'  => ($i === 0),
						];
						$imgSave = $this->productModel->createProductImageModel($dataImg);
					}
				}
			}

			$_SESSION['success'] = 'Producto creado con éxito!';
			header("location: products");
		}
	}

	public function getListController()
	{
		$page = 7;
		$limit = 10;
		$products = $this->productModel->getListModel($page,$limit);

		$cnt = count($products);
		for ($i=0; $i < $cnt; $i++) { 
			$products[$i]['imagePrincipal'] = $this->productModel->getProductImagePrincipalModel($products[$i]['id']);
			$products[$i]['images'] = $this->productModel->getProductImagesNoPrincipalModel($products[$i]['id']);
		}
		
		//echo '<pre>'; print_r($products); echo '</pre>';exit;
		return $products;
	}
}