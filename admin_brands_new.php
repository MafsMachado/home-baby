<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - New Brand';
include 'header.php';
?>

<section id="adminNewBrand" class="pt-5 pb-5 container">
    <h1>Create new brand</h1>
    <form action="inc/actions.php?act=newBrand" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <div class="mt-3">
            Brand:
            <input type="text" name="marca">
        </div>
        <div class="mt-3">
            Image:
            <input type="file" name="img" required>
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>