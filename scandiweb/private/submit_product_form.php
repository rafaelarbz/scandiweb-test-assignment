<?php 
include_once('../vendor/autoload.php');
include_once('db_connection.php');

use MyApp\classes\Book;
use MyApp\classes\Dvd;
use MyApp\classes\Furniture;

if (isset($_POST['productType'])) {

    $product_type = $_POST['productType'];

    $args = [];
    $args['sku'] = str_replace(' ', '', trim($_POST['sku']));
    $args['name'] = trim($_POST['name']);
    $args['price'] = str_replace(',', '.', $_POST['price']);
    $args['product_type'] = $product_type;
    $args['weight'] = str_replace(',', '.', $_POST['weight']) ?? null;
    $args['size'] = str_replace(',', '.', $_POST['size']) ?? null;
    $args['height'] = str_replace(',', '.', $_POST['height']) ?? null;
    $args['width'] = str_replace(',', '.',$_POST['width']) ?? null;
    $args['lenght'] = str_replace(',', '.',$_POST['lenght']) ?? null;
    
    echo saveProduct($product_type, $args);

}else{
    echo json_encode(array("success" => "false", "error" => "Resquest failed!"));
}

function saveProduct($product_type, $args) {
    switch ($product_type) {
        case 'dvd':
            $dvd = new Dvd($args);
            $result = $dvd->save($dvd);
            break;
        case 'book': 
            $book = new Book($args);
            $result = $book->save($book);
            break;
        case 'furniture': 
            $furniture = new Furniture($args);
            $result = $furniture->save($furniture);
            break;
        default:
            $result = false;
            break;
    }

    if ($result == false) {
        return json_encode(array("success" => "false", "error" => "Could not save!"));
    }else{
        return json_encode(array("success" => "true", "error" => null));
    }
}

?>