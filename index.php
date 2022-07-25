<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Home & Baby';
include "header.php";
?>

<!-- ** INTRO ** -->
<section id="intro" class="pt-5 pb-5">
    <div class="container ">
        <div class="row mx-auto">
            <!-- for your home -->
            <div class="col-6 left">
                <div class="imgIntro text-center">
                    <img src="img/general/forYourHome.jpeg" alt="Main Home" width="400">
                    <div class="hover">
                        <div class="shade"></div>
                        <p class="text-white">Home</p>
                    </div>
                </div>
                <h1 class="pt-3">Everything for</h1>
                <h1 class="">your home.</h1>
            </div>
            <!-- for your baby -->
            <div class="col-6 right">
                <h1>Everything for</h1>
                <h1 class="pb-3">your baby.</h1>
                <div class="imgIntro text-center">
                    <img src="img/general/forYourBaby.jpg" alt="Main Baby" width="400">
                    <div class="hover">
                            <div class="shade"></div>
                            <p class="text-white">Home</p>
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
                    <!-- carousel almofadas . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=8 ORDER BY titulo LIMIT 4";
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
                    <!-- carousel almofadas . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=8 ORDER BY titulo DESC LIMIT 4";
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
                    <!-- carousel candeeiros . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=7 ORDER BY titulo LIMIT 4";
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
                    <!-- carousel candeeiros . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=7 ORDER BY titulo DESC LIMIT 4";
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
                <div class="col-md-3 col-sm-12 text-center pt-sm-2"><img src="img/brands/mushie.png" alt="" height="25"></div>
                <div class="col-md-3 col-sm-12 text-center pt-sm-2"><img src="img/brands/laredoute.png" alt="" height="25"></div>
                <div class="col-md-3 col-sm-12 text-center pt-sm-2"><img src="img/brands/liewood.png" alt="" height="25"></div>
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
                    <!-- carousel brinquedos . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=9 ORDER BY titulo LIMIT 4";
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
                    <!-- carousel brinquedos . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=9 ORDER BY titulo DESC LIMIT 4";
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
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=10 ORDER BY produtos.ID LIMIT 4";
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
                    <!-- carousel comer . slide 2 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=10 ORDER BY titulo LIMIT 4";
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
                    <!-- carousel comer . slide 3 -->
                    <div class="carousel-item">
                        <div class="produtos d-flex flex-wrap justify-content-evenly">
                            <?php
                                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                $sql = "SELECT produtos.ID, titulo, preco, marca, img1 FROM produtos LEFT JOIN marcas ON produtos.ID_marca=marcas.marca WHERE ID_tipo_produto=10 ORDER BY titulo DESC LIMIT 4";
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