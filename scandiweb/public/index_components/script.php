<script>

const formProducts =document.getElementById('form-productlist');
formProducts.addEventListener("submit", (e) => {
    e.preventDefault();

    let formData = new FormData(formProducts);
    let notification = document.getElementById('notification');

    if(verifyCheckboxes() == false) {
        notification.innerText = "No product selected!";
        return false;
    }

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

function verifyCheckboxes() {
    let checkboxes = document.querySelectorAll('input:checked');

    if (checkboxes.length !== 0) {
        return true;
    }

    return false;
}

</script>