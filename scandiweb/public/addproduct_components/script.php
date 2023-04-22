<script>
    
const formAddProduct = document.getElementById('product_form');
formAddProduct.addEventListener("submit", (e) => {
    e.preventDefault();

    let formData = new FormData(formAddProduct);
    let sku = document.getElementById('sku');
    let notification = document.getElementById('notification');
    let productType = document.getElementById('productType');

    if(sku.getAttribute('status') == 'invalid') {
        notification.innerText = "Invalid SKU!";
        return false;
    }

    $.ajax({
        url: '../private/submit_product_form.php',
        type: 'POST',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false,
        success:function(data) {
            if (data.success !== "false"){
                window.location.href = "../public/index.php";
            }else{
                notification.innerText = data.error;
            }
        },
        error:function(data) {
            notification.innerText = "Request failed!";
        },
    });

}); 

</script>