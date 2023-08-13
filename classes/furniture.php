<?php 

require_once 'db_object.php';

class Furniture extends Db_object {
    protected $height;
    protected $width;
    protected $length;

    public function setDimentions($height, $width, $length) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }


    public function add(){
        $sql = "INSERT INTO products(sku, product_name, product_price, product_type, height, width, product_length) VALUES (:sku, :product_name, :product_price, :product_type, :height, :width, :product_length);";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':sku', $this->sku);
        $stmt->bindParam(':product_name', $this->name);
        $stmt->bindParam(':product_price', $this->price);
        $stmt->bindParam(':product_type', $this->product_type);
        $stmt->bindParam(':height', $this->height);
        $stmt->bindParam(':width', $this->width);
        $stmt->bindParam(':product_length', $this->length);


        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
            return false;
        }
    }

}




?>