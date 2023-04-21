<?php
include_once('../private/db_connection.php');

//VARIABLES
$first_btn = "<a type='button' href='addproduct.php' class='btn nav-btn'>Add</a>";
$second_btn = "<input type='submit' class='btn nav-btn delete-product-btn' value='Mass Delete'>";
$title = "Product List";
//END

include('head.php');
?>
<body>
    <form id="form-productlist" method="post">
        <?php include('header.php'); ?>
        <?php include('./index_components/product_list.php'); ?>
        <?php include('footer.php'); ?>
    </form>
</body>
<?php include('scripts.php'); ?>
</html>