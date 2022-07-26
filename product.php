<?php
session_start();
include 'inc/config.php';



$ID = htmlentities($_GET['ID']);

$stmt = $conn->prepare("SELECT * FROM produtos WHERE ID = ?");
$stmt->bind_param("i", $ID);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

$pageTitle = $row['titulo'];
include 'header.php';

?>

<section id="productPage" class="pt-5 pb-5">
    <div class="container">
        <form action="inc/actions.php?act=productDetail" class="row">
            <div class="col-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img src="<?= $row['img1'] ?>" class="d-block w-100" alt="...">
                        </div>
                        <?php
                            //só mostrar se existir imagem - img2
                            if(!empty($row['img2'])){
                                echo '<div class="carousel-item"><img src="'.$row['img2'].'" class="d-block w-100" alt="..."></div>';
                            }
                        ?>
                        <?php
                            //só mostrar se existir imagem - img3
                            if(!empty($row['img3'])){
                                echo '<div class="carousel-item"><img src="'.$row['img3'].'" class="d-block w-100" alt="..."></div>';
                            }
                        ?>
                        <?php
                            //só mostrar se existir imagem - img4
                            if(!empty($row['img4'])){
                                echo '<div class="carousel-item"><img src="'.$row['img4'].'" class="d-block w-100" alt="..."></div>';
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-5 productInfo d-flex flex-column justify-content-between">
                <div>
                    <h1><?= $row['titulo'] ?></h1>
                    <div class="ref">Ref:<?= $row['ID'] ?></div>
                </div>
                <div class="quant">
                    Quantity:
                    
                </div>
            </div>
        </form>
    </div>
</section>


<?php
include "footer.php";
?>
