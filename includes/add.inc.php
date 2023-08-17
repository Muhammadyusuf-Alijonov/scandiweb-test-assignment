<?php
require_once('../classes/db_object.class.php');
require_once('../classes/dvd.class.php');
require_once('../classes/furniture.class.php');
require_once('../classes/book.class.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $sku = $_POST['product_sku'];
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $classType = $_POST['type_switcher'];
	    $special_attribute = '';

	    if (isset($_POST['height_input']) && isset($_POST['width_input']) && isset($_POST['length_input']) && $_POST['height_input'] !== '' && $_POST['width_input'] !== '' && $_POST['length_input'] !== '') {
		    $special_attribute = $_POST['height_input'] . 'x' . $_POST['width_input'] . 'x' . $_POST['length_input'];
	    }

	    if (isset($_POST['size_input']) && $_POST['size_input'] !== '') {
		    $special_attribute = $_POST['size_input'];
	    }

	    if (isset($_POST['weight_input']) && $_POST['weight_input'] !== '') {
		    $special_attribute = $_POST['weight_input'];
	    }

        $db_obj = new $classType($sku, $name, $price, $classType, $special_attribute);

        // Additional checks for specific product type data
        if (empty($sku) || empty($name) || empty($price)) {
            header('location: ../index.php?error=empty_fields');
            exit();
        }

        // Attempt to add the product
        $result = $db_obj->add();

        if ($result) {
            header('location: ../index.php?success=product_added');
            exit();
        } else {
            header('location: ../index.php?error=database_error');
            exit();
        }
    }

    if (isset($_POST['cancel'])) {
        header('location: ../index.php?error=adding_cancelled');
        exit();
    }
}