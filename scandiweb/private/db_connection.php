<?php 
require_once('../vendor/autoload.php');

use MyApp\classes\Product;

$db_host = 'localhost';
$db_user = 'root';
$db_password = '123456';
$db_name = 'scandiweb';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

Product::set_connection($connection);

?>