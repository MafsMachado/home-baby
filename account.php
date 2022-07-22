<?php
session_start();
include 'inc/config.php';

$pageTitle = "Account";
include "header.php";

// criar variável para mostrar nome do utilizador que entrou na conta
$sql = "SELECT nome FROM cliente WHERE ID=".$_SESSION['ID'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['nome'];

?>

<section class="container pt-5 pb-5">
    <h1>Hi <?= $name ?></h1>
    <div class="row"> 
        <div class="col-md-4 d-flex flex-column">
            <a href="profile.php">Profile</a>
            <a href="#">Purchases</a>
            <a href="#">Settings</a>
        </div>
        <div class="col-md-8">

        </div>
    </div>
    <button>Log Out</button></div>
</section>

<?php
include "footer.php";
?>