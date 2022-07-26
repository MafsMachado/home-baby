<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - New Sub Category';
include 'header.php';
?>

<section id="adminNewSubCategory" class="pt-5 pb-5 container">
    <h1>Create new sub category</h1>
    <form action="inc/actions.php?act=newSubCategory" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <div class="mt-3">
            Sub Category:
            <input type="text" name="sub_categoria">
        </div>
        <div class="mt-3">
            Category:
            <select name="ID_categoria">
            <?php
                $result = $conn->query("SELECT ID, categoria FROM categorias ORDER BY ID");
                while($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?= $row['ID'] ?>"><?= $row['categoria'] ?></option>
            <?php
                }
            ?>
            </select>
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>