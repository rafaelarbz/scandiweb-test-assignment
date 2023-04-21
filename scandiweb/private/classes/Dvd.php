<?php
namespace MyApp\classes;
use MyApp\classes\Product;

class Dvd extends Product {

    public $size;
    public function __construct($args=[]){
        $this->sku = $args['sku'];
        $this->name = $args['name'];
        $this->price = $args['price'];
        $this->product_type = $args['product_type'];
        $this->size = $args['size'];
    }
    
}

?>