<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - New Product';
include 'header.php';
?>

<section id="adminNewProduct" class="pt-5 pb-5 container">
    <h1>Create new product</h1>
    <form action="inc/actions.php?act=newProduct" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <div class="mt-3">
            Title:
            <input type="text" name="titulo" required>
        </div>
        <div class="mt-3">
            Brand:
            <select name="ID_marca">
            <?php
                $sql = "SELECT * FROM marcas";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?= $row['ID'] ?>"><?= $row['marca'] ?></option>
            <?php
                }
            ?>
            </select>
        </div>
        <div class="mt-3">
            Price:
            <input type="text" name="preco" required>
        </div>
        <div class="mt-3">
            Description:
            <input type="text" name="descricao" required>
        </div>
        <div class="mt-3">
            Category:
            <select name="ID_categoria">
            <?php
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
        <div class="mt-3">
            Sub-Category:
            <select name="ID_sub_categoria">
            <?php
                $sql = "SELECT * FROM sub_categorias";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?= $row['ID'] ?>"><?= $row['sub_categoria'] ?> - <?= $row['ID_categoria'] ?></option>
            <?php
                }
            ?>
            </select>
        </div>
        <div class="mt-3">
            Product Type:
            <select name="ID_tipo_produto">
            <?php
                $sql = "SELECT * FROM tipo_produto";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
            ?>
                    <option value="<?= $row['ID'] ?>"><?= $row['tipo_produto'] ?></option>
            <?php
                }
            ?>
            </select>
        </div>
        <div class="mt-3">
            Image 1:
            <input type="file" name="img1" required>
        </div>
        <div class="mt-3">
            Image 2:
            <input type="file" name="img2">
        </div>
        <div class="mt-3">
            Image 3:
            <input type="file" name="img3">
        </div>
        <div class="mt-3">
            Image 4:
            <input type="file" name="img4">
        </div>
        <input type="submit" value="Submit" class="mt-4">
    </form>
</section>

<?php
include "footer.php";
?>