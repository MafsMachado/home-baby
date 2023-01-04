<?php
session_start();
include 'inc/config.php';

$pageTitle = "Home - Lighting";
include "header.php";
?>

<section id="home" class="p-5 d-flex justify-content-around">
    <!-- coluna dos links -->
    <div class="links pt-3 d-flex flex-column">
        <div class="home d-flex flex-column active">
            <a href="home.php" class="cat">Home</a>
            <a href="home_decoration.php" class="subCat pt-2">Decoration</a>
            <a href="home_furniture.php" class="subCat pt-2">Furniture</a>
            <a href="home_lighting.php" class="subCat pt-2">Lighting</a>
            <a href="home_textiles.php" class="subCat pt-2">Textiles</a>
        </div>
        <div class="baby d-flex flex-column mt-5">
            <a href="baby.php" class="cat">Baby</a>
            <a href="baby_essentials.php" class="subCat pt-2">Essentials</a>
            <a href="baby_toeat.php" class="subCat pt-2">To Eat</a>
            <a href="baby_decoration.php" class="subCat pt-2">Decoration</a>
            <a href="baby_fun.php" class="subCat pt-2">Fun</a>
        </div>
    </div>
    
    <!-- coluna dos produtos -->
    <div class="main pt-3 d-flex flex-column">
        <!-- produtos -->
        <div class="produtos d-flex flex-wrap justify-content-evenly">
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_categoria=1 AND ID_sub_categoria=3 ORDER BY titulo";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){ ?>
                <div class="produto d-flex flex-column mt-4">
                    <a href="product.php&ID=<?php echo $row['ID']; ?>">
                        <!-- imagem -->
                        <div class="pdtImg" style="background-image: url('<?= $row['img1'] ?>');">
                            <div class="hover">
                                <div class="heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-suit-heart heartOutline" viewBox="0 0 16 16">
                                        <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-suit-heart-fill heartFull" viewBox="0 0 16 16">
                                        <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                                    </svg>
                                </div>
                                <div class="btnProductDetail">
                                    <a href="#">Product details</a>
                                </div>
                                <div class="btnAddCart">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="details">
                            <div class="m-0 pt-2 tex-wrap"><?= $row['titulo'] ?></div>
                            <div class="m-0 pt-1"><?= $row['preco'] ?>€</div>
                        </div>
                    </a>
                </div> 
        <?php } ?>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>