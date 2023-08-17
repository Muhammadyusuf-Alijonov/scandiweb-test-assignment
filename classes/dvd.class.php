<?php 
require_once 'db_object.class.php';
require_once 'SaveToDb.class.php';

class DVD extends Db_object{
    use SaveToDb;
    protected $feature_type = 'product_size';
}