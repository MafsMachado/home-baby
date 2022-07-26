<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Home & Baby';
include "header.php";
?>

<!-- ** INTRO ** -->
<section id="intro" class="pt-5 pb-5">
    <div class="container">
        <div class="row mx-auto">
            <!-- for your home -->
            <div class="col-md-6 col-sm-12 d-flex flex-column align-items-center">
                <div class="imgIntroHome">
                    <div class="hover">
                        <a href="home.php">Home</a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end align-self-end">
                    <h1 class="pt-3">Everything for</h1>
                    <h1 class="">your home.</h1>
                </div>
            </div>
            <!-- for your baby -->
            <div class="col-md-6 col-sm-12 d-flex flex-column align-items-center">
                <div class="d-flex flex-column align-items-start align-self-start">    
                    <h1>Everything for</h1>
                    <h1 class="pb-3">your baby.</h1>
                </div>
                <div class="imgIntroBaby">
                    <div class="hover">
                        <a href="baby.php">Baby</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ** HOME ** -->
<section id="indexHome" class="pl-4 pr-4 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- almofadas -->
            <h4>Cushions</h4>
            <!-- carousel almofadas -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- carousel almofadas . slide 1 -->
                    <div class="carousel-item active">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=8 ORDER BY produtos.ID LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel almofadas . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=8 ORDER BY titulo LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel almofadas . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=8 ORDER BY titulo DESC LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row pt-3">
            <!-- candeeiros -->
            <h4>Lamps</h4>
            <!-- carousel candeeiros -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- carousel candeeiros . slide 1 -->
                    <div class="carousel-item active">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=7 ORDER BY produtos.ID LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel candeeiros . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=7 ORDER BY titulo LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel candeeiros . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=7 ORDER BY titulo DESC LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ** BRANDS ** -->
<section id="brands" class="pt-5 pb-5">
    <h4 class="text-center">Brands</h4>
    <!-- carousel marcas -->
    <div class="container mt-4">
        <div class="row">
                <div class="col-md-3 col-sm-12 text-center"><img src="img/brands/h&m.png" alt="" width="75"></div>
                <div class="col-md-3 col-sm-12 text-center pt-sm-4"><img src="img/brands/mushie.png" alt="" height="25"></div>
                <div class="col-md-3 col-sm-12 text-center pt-sm-4"><img src="img/brands/laredoute.png" alt="" height="25"></div>
                <div class="col-md-3 col-sm-12 text-center pt-sm-4"><img src="img/brands/liewood.png" alt="" height="25"></div>
        </div>
    </div>
</section>

<!-- ** BABY ** -->
<section id="indexBaby" class="pl-4 pr-4 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- brinquedos -->
            <h4>Toys</h4>
            <!-- carousel brinquedos -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- carousel brinquedos . slide 1 -->
                    <div class="carousel-item active">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=9 ORDER BY produtos.ID LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel brinquedos . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=9 ORDER BY titulo LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel brinquedos . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=9 ORDER BY titulo DESC LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row pt-3">
            <!-- comer -->
            <h4>Feeding</h4>
            <!-- carousel comer -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- carousel comer . slide 1 -->
                    <div class="carousel-item active">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_sub_categoria=6 ORDER BY produtos.ID LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel comer . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_sub_categoria=6 ORDER BY titulo LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                    <!-- carousel comer . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_sub_categoria=6 ORDER BY titulo DESC LIMIT 4";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){ ?>
                                    <div class="produto d-flex flex-column mt-4">
                                        <a>
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
                                                        <a href="<?php echo "product.php?ID=".$row['ID']; ?>">Product details</a>
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
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>