<?php 

require_once 'db_object.php';
require_once 'SaveToDb.class.php';
class Book extends Db_object{
    
    use SaveToDb;
    protected $feature_type = 'product_weight';

}







?>