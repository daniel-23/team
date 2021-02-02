<?php

require_once "Connection.php";

class ProductModel extends Connection
{
	
	public static function getCategoriesModel()
	{
		$stmt = Connection::connect()->prepare("SELECT * FROM product_categories ORDER BY name");
		$stmt->execute();
		$resp = $stmt->fetchAll();
		return $resp;
	}

	public function createProductModel($data)
	{
		
		$sql = "INSERT INTO products (name, category_id, short_description, long_description, price, is_novelty, is_offer, is_principal) VALUES (:name, :category_id, :short_description, :long_description, :price, :is_novelty, :is_offer, :is_principal)";
		$dbh = Connection::connect();
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(":name", $data['name'], PDO::PARAM_STR);
		$stmt->bindParam(":category_id", $data['category_id'], PDO::PARAM_INT);
		$stmt->bindParam(":short_description", $data['short_description'], PDO::PARAM_STR);
		$stmt->bindParam(":long_description", $data['long_description'], PDO::PARAM_STR);
		$stmt->bindParam(":price", $data['price'], PDO::PARAM_STR);
		$stmt->bindParam(":is_novelty", $data['is_novelty'], PDO::PARAM_BOOL);
		$stmt->bindParam(":is_offer", $data['is_offer'], PDO::PARAM_BOOL);
		$stmt->bindParam(":is_principal", $data['is_principal'], PDO::PARAM_BOOL);
		try {
			$stmt->execute();
			return $dbh->lastInsertId();
	    } catch(PDOExecption $e) {
	        
	        print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function createProductImageModel($data)
	{
		$sql = "INSERT INTO product_images (path, product_id, principal) VALUES (:path, :product_id, :principal)";
		
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":path", $data['path'], PDO::PARAM_STR);
		$stmt->bindParam(":product_id", $data['product_id'], PDO::PARAM_INT);
		$stmt->bindParam(":principal", $data['principal'], PDO::PARAM_BOOL);
		try {
			$stmt->execute();
			return true;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function getListModel($page,$limit)
	{
		$sql = "SELECT * FROM products ORDER BY name LIMIT $page, $limit";
		$stmt = Connection::connect()->prepare($sql);
		try {
			$stmt->execute();
			return $stmt->fetchAll();
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }

	}
	public function getProductImagesNoPrincipalModel($productId)
	{
		$sql = "SELECT * FROM product_images WHERE principal = 0 AND product_id = :product_id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":product_id", $productId, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return $stmt->fetchAll();
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function getProductImagePrincipalModel($productId)
	{
		$sql = "SELECT path FROM product_images WHERE principal = 1 AND product_id = :product_id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":product_id", $productId, PDO::PARAM_INT);
		try {
			$stmt->execute();
			$r = $stmt->fetch();
			if ($r) {
				return $r[0];
			}
			return $r;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function getProductImagesAllModel($productId)
	{
		$sql = "SELECT * FROM product_images WHERE product_id = :product_id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":product_id", $productId, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return $stmt->fetchAll();
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}


	

	public function getProductEditModel($id)
	{
		$sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return $stmt->fetch();
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}


	

	public function getTotalModel()
	{
		$sql = "SELECT COUNT(id) FROM products";
		$stmt = Connection::connect()->prepare($sql);
		
		try {
			$stmt->execute();
			$r = $stmt->fetch();
			if ($r) {
				return $r[0];
			}
			return $r;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function setImgNoPrincipal($productId)
	{
		$sql = "UPDATE product_images SET principal = 0 WHERE product_id = :product_id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":product_id", $productId, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return true;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function setImgPrincipal($id)
	{
		$sql = "UPDATE product_images SET principal = 1 WHERE id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return true;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function deleteImgModel($id)
	{
		$sql = "DELETE FROM product_images WHERE id = :id";
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		try {
			$stmt->execute();
			return true;
	    } catch(PDOExecption $e) {
	    	print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}

	public function updateProductModel($data,$id)
	{
		$sql = "UPDATE products SET name = :name, category_id = :category_id, short_description = :short_description, long_description = :long_description, price = :price, is_novelty = :is_novelty, is_offer = :is_offer, is_principal = :is_principal WHERE id = :id";
		
		$stmt = Connection::connect()->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->bindParam(":name", $data['name'], PDO::PARAM_STR);
		$stmt->bindParam(":category_id", $data['category_id'], PDO::PARAM_INT);
		$stmt->bindParam(":short_description", $data['short_description'], PDO::PARAM_STR);
		$stmt->bindParam(":long_description", $data['long_description'], PDO::PARAM_STR);
		$stmt->bindParam(":price", $data['price'], PDO::PARAM_STR);
		$stmt->bindParam(":is_novelty", $data['is_novelty'], PDO::PARAM_BOOL);
		$stmt->bindParam(":is_offer", $data['is_offer'], PDO::PARAM_BOOL);
		$stmt->bindParam(":is_principal", $data['is_principal'], PDO::PARAM_BOOL);
		try {
			$stmt->execute();
			return true;
	    } catch(PDOExecption $e) {
	        
	        print "Error!: " . $e->getMessage() . "</br>";
	        exit;
	    }
	}
}