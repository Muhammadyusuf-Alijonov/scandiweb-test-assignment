<?php
require_once 'database.php';

abstract class Db_object extends Database
{
    protected $sku;
    protected $name;
    protected $price;
    protected $product_type;
    // protected $measurmens;

    public function __construct($sku, $name, $price, $product_type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
    }

    abstract public function add();
    // public function add($sku, $name, $price, $size)
    // {
    //     $sql = "INSERT INTO products(sku, product_name, product_price, size) VALUES (:sku, :product_name, :product_price, :product_size);";

    //     $stmt = $this->connect()->prepare($sql);

    //     $stmt->bindParam(':sku', $sku);
    //     $stmt->bindParam(':product_name', $name);
    //     $stmt->bindParam(':product_price', $price);
    //     $stmt->bindParam(':product_size', $size);

    //     try {
    //         $stmt->execute();
    //         return true;
    //     } catch (PDOException $e) {
    //         die('Error: ' . $e->getMessage());
    //         return false;
    //     }
    // }
}
