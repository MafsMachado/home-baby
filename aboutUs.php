<?php
session_start();
include 'inc/config.php';

$pageTitle = "About Us";
include "header.php";
?>

<section id="aboutUs" class="container pt-5 pb-5">
    <div class="row mx-auto align-items-center">
        <!-- texto -->
        <div class="col-md-6 col-sm-12 mb-sm-4">
            <h1>About Us</h1>
            <p class="pt-3">Home & baby was born after while being pregnant and started searching for things for my baby, and never find cute and different things. I decided to create this store to all the moms that want to do their babies bedroom, buy the essentials and revamp their house, or just to the people that love or need the lovely things selected by me, with the best quality, and original designs.</p>
        </div>
        <!-- imagem -->
        <div class="col-md-6 col-sm-12 text-center">
            <img src="img/general/aboutUs.jpg" alt="About Us" width="400">
        </div>
    </div>
</section>


<?php
include "footer.php";
?>