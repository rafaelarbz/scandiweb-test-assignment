<?php
include_once('../private/db_connection.php');

//VARIABLES
$first_btn = "<input type='submit' class='btn nav-btn' value='Save'>";
$second_btn = "<a type='button' href='index.php' class='btn nav-btn'>Cancel</a>";
$title = "Product Add";
$erros = [];
//END

include('head.php');
?>
<body>
    <form id="product_form" method="post">
        <?php include('header.php'); ?>
        <?php include('./addproduct_components/product_form.php'); ?>
        <?php include('footer.php'); ?>
    </form>
</body>
<?php include('scripts.php'); ?>
</html>