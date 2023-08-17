<?php

trait SaveToDb
{
	public function add()
	{
		// Logic to add DVD-specific data (size) to the database
		$sql = "INSERT INTO products(sku, product_name, product_price, product_type," . $this->feature_type . ") VALUES (:sku, :product_name, :product_price,:product_type, :product_size);";

		$stmt = $this->connect()->prepare($sql);

		$stmt->bindParam(':sku', $this->sku);
		$stmt->bindParam(':product_name', $this->name);
		$stmt->bindParam(':product_price', $this->price);
		$stmt->bindParam(':product_type', $this->product_type);
		$stmt->bindParam(':product_size', $this->special_attribute);

		try {
			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			die('Error: ' . $e->getMessage());
			return false;
		}
	}
}