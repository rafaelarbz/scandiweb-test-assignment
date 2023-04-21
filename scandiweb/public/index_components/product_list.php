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
<script>
const formProducts =document.getElementById('form-productlist');
formProducts.addEventListener("submit", (e) => {
    e.preventDefault();

    let formData = new FormData(formProducts);
    let notification = document.getElementById('notification');

    $.ajax({
        url: '../private/delete_product.php',
        type: 'POST',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success:function(data) {
            if (data.success !== "false"){
                window.location.reload();
            }else{
                notification.innerText = data.error;
            }
        },
        error:function(data) {
            notification.innerText = "Request failed!";
        }
    });

}); 
</script>