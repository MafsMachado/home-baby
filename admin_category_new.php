<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - New Category';
include 'header.php';
?>

<section id="adminNewCategory" class="pt-5 pb-5 container">
    <h1>Create new category</h1>
    <form action="inc/actions.php?act=newCategory" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <div class="mt-3">
            Category:
            <input type="text" name="categoria">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>