<?php 
use MyApp\classes\Product;
$products = Product::get_all();
?>
<main>
    <section id="product-list">
        <div class="product-list">
            <p class="notifications" id="notification"></p>
            <div class="row row-products">
                <?php foreach ($products as $product) {
                    echo Product::show_product($product['id'], $product['sku'], $product['name'], $product['price'], $product['product_type'], $product['size_mb'], $product['dimensions_cm'], $product['weight_kg']);
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php include('script.php'); ?>