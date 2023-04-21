<?php

namespace MyApp\classes;

class Product {

    public $id;
    public $sku;
    public $name;
    public $price;
    public $product_type;

    protected static $database;

    public static function set_connection($database) {
        return self::$database = $database;
    }

    public static function get_all() {
        $query = "SELECT * FROM products";
        return self::$database->query($query);
    }

    public static function show_product($id, $sku, $name, $price, $product_type, $size = null, $dimensions = null, $weight = null) {

        $product_type_info = Product::get_info_product_type($product_type, $size, $dimensions, $weight);
        
        return "
        <div class='col-3 mb-3 col-card'>
            <div class='card'>
                <div class='card-body'>
                    <label class='container'>
                        <input type='checkbox' name='deleteId[]' value='$id' class='delete-checkbox'>
                        <span class='checkmark'></span>
                    </label>
                    $sku<br>
                    $name<br>
                    $price $<br>
                    $product_type_info
                </div>
            </div>
        </div>
        ";
    }

    public static function get_info_product_type($product_type, $size = null, $dimensions = null, $weight = null) {
        if($product_type == 'dvd') {
            $product_type_info = "Size: $size MB";
        } elseif ($product_type == 'book') {
            $product_type_info = "Weight: $weight KG";
        } elseif ($product_type == 'furniture') {
            $dimensions = str_replace(",", "x", $dimensions);
            $product_type_info = "Dimension: $dimensions";
        } else {
            $product_type_info = "";
        }
        return $product_type_info;
    }

    public static function get_products_by_sku($sku) {
        $query = "SELECT * FROM products WHERE sku = '$sku'";
        return self::$database->query($query)->fetch_assoc();
    }

    /**
     * @param Dvd|Book|Furniture $product
     */
    public function save($product) {

        $query_components = $this->verify_valid_collumns($product);
        $collumns = $query_components['collumns'];
        $values = $query_components['values'];

        $query = "INSERT INTO products $collumns VALUES $values";
        return self::$database->query($query);
    }

    /**
     * @param Dvd|Book|Furniture $product
     */
    public function verify_valid_collumns($product) {
        switch ($product->product_type) {
            case 'dvd':
                $collumns = "(sku, name, price, product_type, size_mb)";
                $values = "('$product->sku', '$product->name', '$product->price', '$product->product_type', '$product->size')";
                break;
            case 'book': 
                $collumns = "(sku, name, price, product_type, weight_kg)";
                $values = "('$product->sku', '$product->name', '$product->price', '$product->product_type', '$product->weight')";
                break;
            case 'furniture':
                $collumns = "(sku, name, price, product_type, dimensions_cm)";
                $values = "('$product->sku', '$product->name', '$product->price', '$product->product_type', '$product->height,$product->width,$product->lenght')";
                break;
        }
        return array('collumns' => $collumns, 'values' => $values);
    }

    public function delete($ids) {
        $query = "DELETE FROM products WHERE id IN ($ids)";
        return self::$database->query($query);
    }
}

?>