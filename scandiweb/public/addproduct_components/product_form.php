<main>
    <section id="addproduct-form">
        <div class="product-form">
            <div class="row-components">
                <div class="row mb-3">
                    <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-3">
                        <input aria-describedby="validate-sku" required onchange="skuValidation(this.value);" oninput="this.value = this.value.toUpperCase();" type="text" id="sku" name="sku" maxlength="9" placeholder="RAF12345" class="form-control">
                        <div id="validate-sku" class="validation"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-3">
                        <input required type="text" id="name" name="name" placeholder="Product Name" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
                    <div class="col-3">
                        <input required type="number" placeholder="0,00" id="price" name="price" maxlength="20" step=".01" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
                    <div class="col-3">
                        <select required onchange="showSelectedProductForm(this.value);" id="productType" name="productType" class="form-select" aria-label="Default select example">
                            <option value="" selected>Type Switcher</option>
                            <option value="dvd">DVD</option>
                            <option value="book">Book</option>
                            <option value="furniture">Furniture</option>
                        </select>
                    </div>
                </div>
                <div id="dvdform" style="display: none;">
                    <div class="row mb-3" aria-describedby="size-description">
                        <label for="size" class="col-sm-2 col-form-label">Size (MB)</label>
                        <div class="col-3">
                            <input type="number" id="size" name="size" placeholder="0" step=".01" class="form-control" maxlength="20">
                        </div>
                    </div>
                    <div class="product-description" id="size-description">Please, provide size!</div>
                </div>
                <div id="bookform" style="display: none;">
                    <div class="row mb-3" aria-describedby="weight-description">
                        <label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label>
                        <div class="col-3">
                            <input type="number" id="weight" name="weight" placeholder="0,00" step=".01" class="form-control" maxlength="20">
                        </div>
                    </div>
                    <div class="product-description" id="weight-description">Please, provide weight!</div>
                </div>
                <div id="furnitureform" style="display: none;">
                    <div class="row mb-3">
                        <label for="height" class="col-sm-2 col-form-label">Height (CM)</label>
                        <div class="col-3">
                            <input type="number" id="height" name="height" placeholder="0,00" step=".01" class="form-control" maxlength="20">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="width" class="col-sm-2 col-form-label">Width (CM)</label>
                        <div class="col-3">
                            <input type="number" id="width" name="width" placeholder="0,00" step=".01" class="form-control" maxlength="20">
                        </div>
                    </div>
                    <div class="row mb-3" aria-describedby="dimensions-description">
                        <label for="lenght" class="col-sm-2 col-form-label">Lenght (CM)</label>
                        <div class="col-3">
                            <input type="number" id="lenght" name="lenght" placeholder="0,00" step=".01" class="form-control" maxlength="20">
                        </div>
                    </div>
                    <div class="product-description" id="dimensions-description">Please, provide dimensions!</div>
                </div>
                <p class="notifications" id="notification"></p>
            </div>
        </div>
    </section>
</main>
<?php include('script.php'); ?>