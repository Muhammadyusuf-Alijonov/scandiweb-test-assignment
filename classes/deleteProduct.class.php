<?php
require_once 'database.class.php';

class DeleteProduct extends Database
{
	public function deleteAll($skus)
	{
		$placeholders = implode(',', array_fill(0, count($skus), '?'));
		$query = "DELETE FROM products WHERE sku IN ($placeholders)";

		$stmt = $this->connect()->prepare($query);
		$stmt->execute($skus);

		return $stmt->rowCount() > 0; // Return true if any rows were affected, false otherwise
	}

}