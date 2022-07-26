<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Admin - Edit Product';
include 'header.php';

$ID = htmlentities($_GET['ID']);

$stmt = $conn->prepare("SELECT * FROM produtos WHERE ID = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section id="adminEditProduct" class="pt-5 pb-5 container">
    <h1>Edit product</h1>
    <form action="inc/actions.php?act=editProduct" method="POST" autocomplete="off" enctype="multipart/form-data" class="mt-4">
        <!-- id -->
        <input type="text" name="ID" value="<?= $ID ?>">;
        <!-- titulo --> 
        <div class="mt-3">
            Title:
            <input type="text" name="titulo" value="<?= $row['titulo'] ?>">
        </div>
        <!-- marca -->
        <div class="mt-3">
            Brand:
            <select name="ID_marca">
            <!-- obter dados já existentes para as opções -->
            <?php

                $stmt->close();
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
        <!-- preço -->
        <!-- voltar a abrir o stmt de forma a obter os dados anteriores -->
        <?php
            $ID = htmlentities($_GET['ID']);

            $stmt = $conn->prepare("SELECT * FROM produtos WHERE ID = ?");
            $stmt->bind_param("i", $ID);
            $stmt->execute();

            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
        ?>
        <div class="mt-3">
            Price:
            <input type="text" name="preco" value="<?= $row['preco'] ?>">
        </div>
        <!-- descrição-->
        <div class="mt-3">
            Description:
            <textarea type="text" name="descricao" value=""><?= $row['descricao'] ?></textarea>
        </div>
        <!-- categoria -->
        <div class="mt-3">
            Category:
            <select name="ID_categoria">
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
        <!-- sub_categoria-->
        <div class="mt-3">
            Sub-Category:
            <select name="ID_sub_categoria">
            <!-- obter dados já existentes para as opções -->
            <?php
            $stmt->close();
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
        <!-- tipo_produto -->
        <div class="mt-3">
            Product Type:
            <select name="ID_tipo_produto">
            <!-- obter dados já existentes para as opções -->
            <?php
            $stmt->close();
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
        <!-- imagem 1 -->
        <div class="mt-3">
            Image 1:
            <input type="file" name="img1">
        </div>
        <!-- imagem 2 -->
        <div class="mt-3">
            Image 2:
            <input type="file" name="img2">
        </div>
        <!-- imagem 3 -->
        <div class="mt-3">
            Image 3:
            <input type="file" name="img3">
        </div>
        <!-- imagem 4 -->
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