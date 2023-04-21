function showSelectedProductForm(value) {

    document.getElementById('notification').textContent = "";

    let dvdForm = document.getElementById('dvdform');
    let inputSize = document.getElementById('size');

    let bookForm = document.getElementById('bookform');
    let inputWeight = document.getElementById('weight');

    let furnitureForm = document.getElementById('furnitureform');
    let inputHeight = document.getElementById('height');
    let inputWidth = document.getElementById('width');
    let inputLenght = document.getElementById('lenght');

    switch (value) {
        case 'dvd':
            bookForm.setAttribute('style', 'display:none;');
            inputWeight.required = false;

            furnitureForm.setAttribute('style', 'display:none;');
            inputHeight.required = false;
            inputWidth.required = false;
            inputLenght.required = false;

            dvdForm.removeAttribute('style');
            inputSize.required = true;
            break;
        case 'book':
            dvdForm.setAttribute('style', 'display:none;');
            inputSize.required = false;

            furnitureForm.setAttribute('style', 'display:none;');
            inputHeight.required = false;
            inputWidth.required = false;
            inputLenght.required = false;

            bookForm.removeAttribute('style');
            inputWeight.required = true;
            break;
        case 'furniture':
            dvdForm.setAttribute('style', 'display:none;');
            inputSize.required = false;

            bookForm.setAttribute('style', 'display:none;');
            inputWeight.required = false;

            furnitureForm.removeAttribute('style');
            inputHeight.required = true;
            inputWidth.required = true;
            inputLenght.required = true;
            break;
        default:
            dvdForm.setAttribute('style', 'display:none;');
            inputSize.required = false;

            bookForm.setAttribute('style', 'display:none;');
            inputWeight.required = false;

            furnitureForm.setAttribute('style', 'display:none;');
            inputHeight.required = false;
            inputWidth.required = false;
            inputLenght.required = false;
            break;
    }
}

function skuValidation(value) {
    document.getElementById('notification').textContent = "";
    $.ajax({
        url: '../private/validations.php',
        type: 'POST',
        dataType: 'json',
        data: {'sku' : value},
        success: function(data) {
            document.getElementById('validate-sku').innerText = data.alert;
            document.getElementById('sku').setAttribute('status', data.sku);
        }
    });
}