<?php

use MyApp\classes\Product;

include_once('../vendor/autoload.php');
include_once('db_connection.php');

if(isset($_POST['deleteId'])) {
    $ids = implode(',', $_POST['deleteId']);

    if ($ids == null) {
        echo json_encode(array("success" => "false", "error" => "No product selected!"));
    }

    echo deleteProduct($ids);
}else{
    echo json_encode(array("success" => "false", "error" => "No product selected!"));
}

function deleteProduct($ids) {
    $product = new Product;
    $result = $product->delete($ids);
    if($result == false){
        return json_encode(array("success" => "false", "error" => "Could not delete!"));
    }else{
        return json_encode(array("success" => "true", "error" => null));
    }
}


?>