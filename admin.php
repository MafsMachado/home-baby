<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Login';
include 'header.php';
?>

<section id="admin" class="container pt-5 pb-5">
    <h1>Welcome to the Admin page</h1>
    <div class="row"> 
        <div class="col-md-4 d-flex flex-column">
            <a href="profile.php" class="pt-3">Profile</a>
            <a href="#" class="pt-2">Purchases</a>
            <a href="#" class="pt-2">Settings</a>
        </div>
    </div>
    <form action="inc/actions.php?act=logout" method="POST" class="form">
        <input type="submit" name="logout" value="Log out" class="mt-5">
    </form>
</section>

<?php
include "footer.php";
?>