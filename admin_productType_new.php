<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - New Product Type';
include 'header.php';
?>

<section id="adminNewProductType" class="pt-5 pb-5 container">
    <h1>Create new product type</h1>
    <form action="inc/actions.php?act=newProductType" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <div class="mt-3">
            Product Type:
            <input type="text" name="tipo_produto">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>