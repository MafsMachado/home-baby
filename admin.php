<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin';
include 'header.php';

$_SESSION['login'] = true;
?>

<section id="admin" class="container pt-5 pb-5">
    <h1>Welcome to the Admin page</h1>
    <div class="row"> 
        <div class="col-md-4 d-flex flex-column">
            <a href="admin_products.php" class="pt-3">Products</a>
            <a href="admin_brands.php" class="pt-2">Brands</a>
            <a href="admin_category.php" class="pt-2">Category</a>
            <a href="admin_subCategory.php" class="pt-2">Sub-Category</a>
            <a href="admin_productType.php" class="pt-2">Product Type</a>
        </div>
    </div>
    <form action="inc/actions.php?act=logout" method="POST" class="form">
        <input type="submit" name="logout" value="Log out" class="mt-5">
    </form>
</section>

<?php
include "footer.php";
?>