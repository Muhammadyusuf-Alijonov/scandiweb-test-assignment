<?php
require_once '../classes/deleteProduct.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['deleteProduct'])) {
		if (isset($_POST["product_selected"]) && is_array($_POST["product_selected"])) {
			$selectedSkus = $_POST["product_selected"];

			$deleteProd = new DeleteProduct();
			$deleteProd->deleteAll($selectedSkus);


			// Redirect back to the main page or display a success message
			header("Location: ../index.php?deletion_success=1");
			exit();
		} else {
			header('Location: ../index.php?error=product_not_selected!');
			exit();
		}
	}
}
