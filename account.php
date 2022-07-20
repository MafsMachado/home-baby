<?php
session_start();
include 'inc/config.php';

$pageTitle = "Account";
include "header.php";

if(isset($_SESSION['username'])){
    echo "Welcome '{$_SESSION['nome']}'";
}
?>

<section class="container pt-5 pb-5">
    <h1>Hi <?php $name ?></h1>
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