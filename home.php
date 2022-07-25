<?php
session_start();
include 'inc/config.php';

$pageTitle = "Home";
include "header.php";
?>

<section id="home" class="p-5 d-flex justify-content-around">
    <!-- coluna dos links -->
    <div class="links pt-3 d-flex flex-column">
        <div class="home d-flex flex-column">
            <a href="home.php" class="cat">Home</a>
            <a href="home_decoration.php" class="subCat pt-1">Decoration</a>
            <a href="home_furniture.php" class="subCat pt-1">Furniture</a>
            <a href="home_lighting.php" class="subCat pt-1">Lighting</a>
            <a href="home_textiles.php" class="subCat pt-1">Textiles</a>
        </div>
        <div class="baby d-flex flex-column mt-4">
            <a href="baby.php" class="cat">Baby</a>
            <a href="baby_essentials.php" class="subCat pt-1">Essentials</a>
            <a href="baby_toeat.php" class="subCat pt-1">To Eat</a>
            <a href="baby_decoration.php" class="subCat pt-1">Decoration</a>
            <a href="baby_fun.php" class="subCat pt-1">Fun</a>
        </div>
    </div>
    
    <!-- coluna dos produtos -->
    <div class="main pt-3 d-flex flex-column">
        <!-- frase da categoria -->
        <div class="title mb-4">
            <h1>Everything for</h1>
            <h1>your home.</h1>
        </div>
        <!-- produtos -->
        <div class="produtos d-flex flex-wrap justify-content-evenly">
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_categoria=1 ORDER BY titulo";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){ ?>
                <div class="produto d-flex flex-column mt-4">
                    <a href="product.php?<? $row['produtos.ID'] ?>">
                    <!-- imagem -->
                    <div class="pdtImg position-relative">
                        <img src="<?= $row['img1'] ?>" alt="" width="300">
                        <div class="hover display-none position-absolute top-0 start-0">
                            <div class="shade"></div>
                            <div class="position-absolute top-0 end-0"></div>
                            <p class="text-white"><?= $row['marca'] ?></p>
                        </div>
                    </div>
                        <div class="m-0 pt-2 tex-wrap"><?= $row['titulo'] ?></div>
                        <div class="m-0 pt-1"><?= $row['preco'] ?>€</div>
                    </a>
                </div> 
        <?php } ?>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>