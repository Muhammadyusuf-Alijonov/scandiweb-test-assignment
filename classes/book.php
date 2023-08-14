<?php 

require_once 'db_object.php';

class Book extends Db_object{
    public function add(){
        
        $sql = "INSERT INTO products(sku, product_name, product_price, product_type, product_weight) VALUES (:sku, :product_name, :product_price, :product_type, :product_weight);";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':sku', $this->sku);
        $stmt->bindParam(':product_name', $this->name);
        $stmt->bindParam(':product_price', $this->price);
        $stmt->bindParam(':product_type', $this->product_type);
        $stmt->bindParam(':product_weight', $this->special_attribute);


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