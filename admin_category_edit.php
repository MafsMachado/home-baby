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
        <div><?= $ID ?></div>
        <!-- categoria -->
        <div class="mt-3">
            Category:
            <select name="categoria">
            <!-- obter dados já existentes para as opções -->
            <?php

                $stmt->close();
                $sql = "SELECT * FROM categorias";
                $result = $conn->query($sql);
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