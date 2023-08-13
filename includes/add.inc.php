<?php
require_once('../classes/db_object.php');
require_once('../classes/dvd.class.php');
require_once('../classes/furniture.php');
require_once('../classes/book.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $sku = $_POST['product_sku'];
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $classType = $_POST['type_switcher'];

        $db_obj = new $classType($sku, $name, $price, $classType);

        // Additional checks for specific product type data
        if ($classType === 'DVD') {
            $size = $_POST['dvd_input'];
            if (empty($size)) {
                header('location: ../index.php?error=empty_fields');
                exit();
            }
            $db_obj->setSize($size); // Assuming you have a method to set size in your DVD class
        } elseif ($classType === 'Furniture') {
            // Similar checks and handling for Furniture
            $height = $_POST['height_input'];
            $width = $_POST['width_input'];
            $length = $_POST['length_input'];
            if (empty($height) || empty($width) || empty($length) ) {
                header('location: ../index.php?error=empty_fields');
                exit();
            }

            $db_obj->setDimentions($height, $width, $length);
            
        } elseif ($classType === 'Book') {
            // Similar checks and handling for Book
            $weight = $_POST['weight_input'];

            if (empty($weight)) {
                header('location: ../index.php?error=empty_fields');
                exit();
            }

            $db_obj->setWeight($weight);
        }

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
?>
