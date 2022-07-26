<?php
session_start();
include 'inc/config.php';

$pageTitle = "Brands";
include "header.php";
?>

<section id="brands" class="container pt-5 pb-5 text-center">
    <h1 class="mb-5">Brands</h1>
    <div class="row">
        <?php
        // mostrar imagem na base de dados
        $stmt = $conn->prepare("SELECT ID, marca, img FROM marcas");
        if($stmt === false and $debug)
            die('Erro: '.$conn->error);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            echo '<div class="col-md-4 col-sm-12 p-4">
                    <img src="'.$row['img'].'" alt="'.$row['marca'].'" height="50">
                    <div class="card-body pt-3">'.$row['marca'].'</div>
                  </div>';
        }
        ?>
    </div>
</section>

<?php
include "footer.php";
?>