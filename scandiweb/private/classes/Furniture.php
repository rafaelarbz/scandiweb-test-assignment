<?php 
namespace MyApp\classes;
use MyApp\classes\Product;

class Furniture extends Product {

    public $height;
    public $width;
    public $lenght;
    public function __construct($args=[]){
        $this->sku = $args['sku'];
        $this->name = $args['name'];
        $this->price = $args['price'];
        $this->product_type = $args['product_type'];
        $this->height = $args['height'];
        $this->width = $args['width'];
        $this->lenght = $args['lenght'];
    }
}
?>