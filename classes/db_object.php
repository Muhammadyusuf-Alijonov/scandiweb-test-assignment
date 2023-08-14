<?php
require_once 'database.php';

abstract class Db_object extends Database
{
    protected $sku;
    protected $name;
    protected $price;
    protected $product_type;
    protected $special_attribute;

    public function __construct($sku, $name, $price, $product_type, $special_attribute) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
        $this->$special_attribute = $special_attribute;
    }

    abstract public function add();
}
