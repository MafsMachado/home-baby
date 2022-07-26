<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - Edit Category';
include 'header.php';

$ID = htmlentities($_GET['ID']);

$stmt = $conn->prepare("SELECT * FROM categorias WHERE ID = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section id="adminEditCategory" class="pt-5 pb-5 container">
    <h1>Edit category</h1>
    <form action="inc/actions.php?act=editCategory" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <!-- id -->
        <input type="text" name="ID" value="<?= $ID ?>">
        <!-- categoria -->
        <div class="mt-3">
            Category:
            <input type="text" name="categoria" value="<?= $row['categoria'] ?>">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>