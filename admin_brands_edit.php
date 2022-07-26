<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - Edit Brand';
include 'header.php';

$ID = htmlentities($_GET['ID']);

$stmt = $conn->prepare("SELECT ID, marca, img FROM marcas WHERE ID = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section id="adminEditBrand" class="pt-5 pb-5 container">
    <h1>Edit brand</h1>
    <form action="inc/actions.php?act=editBrand" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <!-- id -->
        <input type="text" name="ID" value="<?= $ID ?>">
        <!-- marca -->
        <div class="mt-3">
            Brand:
            <input type="text" name="marca" value="<?= $row['marca'] ?>">
        </div>
        <!-- imagem -->
        <div class="mt-3">
            <img src="img/brands/<?= $row['marca'] ?>" alt="" width="200">
            Image:
            <input type="file" name="img">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>