<?php 

require_once 'db_object.php';
require_once 'SaveToDb.class.php';

class Furniture extends Db_object {

    use SaveToDb;
    protected $feature_type = 'product_dimensions';

}




?>