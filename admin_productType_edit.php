<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - Edit Product Type';
include 'header.php';

$ID = htmlentities($_GET['ID']);

$stmt = $conn->prepare("SELECT ID, tipo_produto FROM tipo_produto WHERE ID = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section id="adminEditProductType" class="pt-5 pb-5 container">
    <h1>Edit product type</h1>
    <form action="inc/actions.php?act=editProductType" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <!-- id -->
        <input type="text" name="ID" value="<?= $ID ?>">
        <!-- tipo de produto -->
        <div class="mt-3">
            Product Type:
            <input type="text" name="tipo_produto" value="<?= $row['tipo_produto'] ?>">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>