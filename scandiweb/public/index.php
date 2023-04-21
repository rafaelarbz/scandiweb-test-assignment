<?php
include_once('../private/db_connection.php');

//VARIABLES
$title = "Product List";
//END

include('head.php');
?>
<body>
    <form id="form-productlist" method="post">
        <header>
            <nav class="navbar fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
                    <div class="btn-toolbar">
                        <button type="button" onclick="window.location.href='addproduct.php';" class="nav-btn">ADD</button>
                            &emsp;
                        <button type="submit" class="delete-product-btn">MASS DELETE</button>
                    </div>
                </div>
            </nav>
        </header>

        <?php include('./index_components/product_list.php'); ?>

        <footer>
            <hr>
            <p>Scandiweb Test assignment</p>
        </footer>
    </form>
</body>
<?php include('scripts.php'); ?>
</html>