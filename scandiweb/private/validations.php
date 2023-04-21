<?php
include_once('../vendor/autoload.php');
include_once('db_connection.php');

use MyApp\classes\Product;

if (!empty($_POST['sku'])) {
    $sku = $_POST['sku'];
    echo validation_sku($sku);
}
function validation_sku($value) {
    $products = Product::get_products_by_sku($value); 
    if (count($products) > 0) {
        return json_encode(array("alert" => "SKU already exists!", "sku" => "invalid"));
    }elseif(preg_match('/[^A-Za-z0-9]/', $value)) {
        return json_encode(array("alert" => "SKU must contain only letters and numbers!", "sku" => "invalid"));
    }elseif(ctype_alpha($value) || preg_match('/^\d+$/', $value)){
        return json_encode(array("alert" => "SKU must contain letters and numbers!", "sku" => "invalid"));
    }else{
        return json_encode(array("alert" => null, "sku" => "valid"));
    }
}

?>