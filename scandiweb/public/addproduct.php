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
        <header>
            <nav class="navbar fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
                    <div class="btn-toolbar">
                        <button type="submit" class="nav-btn">Save</button>
                        &emsp;
                        <button type="button" onclick="window.location.href='index.php';" class='nav-btn'>Cancel</button>
                    </div>
                </div>
            </nav>
        </header>

        <?php include('./addproduct_components/product_form.php'); ?>

        <footer>
            <hr>
            <p>Scandiweb Test assignment</p>
        </footer>
    </form>
</body>
<?php include('scripts.php'); ?>
</html>