<?php
require_once "database.class.php";

class GetProduct extends Database
{
	public function getProduct()
	{
		$sql = "SELECT * FROM products";
		$stmt = $this->connect()->prepare($sql);

		if (!$stmt->execute()) {
			$stmt = null;
			header('location: ../index.php?error=statementfailed');
			exit();
		}

		$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $product;
	}
}