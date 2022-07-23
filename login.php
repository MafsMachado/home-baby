<?php
session_start();
include 'inc/config.php';

$pageTitle = 'Login';
include 'header.php';


$msg = @$_GET['msg'];

switch($msg){
    case 'loginErr': echo 'Erro a fazer login'; break;
    case 'noPermission': echo 'Não tem acesso para aceder a este conteúdo, faça login abaixo'; break;
}
?>

<section id="login" class="container mx-auto">
    <div class="row d-flex justify-content-center">
        <!-- login -->
        <form action="inc/actions.php?act=login" method="POST" class="form col-md-5 d-flex flex-column align-content-start">
                <h4>Login</h4>
                <div class="doLogin text-center mt-1 pt-5 pb-5">
                    <div>
                        Email:
                        <input type="text" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="pt-4">
                        Password:
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" value="Login">
                </div>
        </form>
        <div class="col-1"></div>
         <!-- nova conta -->
         <form action="inc/actions.php?act=newAccount" method="POST" class="form col-md-5 d-flex flex-column align-content-start">
            <h4>Register</h4>
            <div class="newAccount text-center mt-1 pt-5 pb-5">
                <div>
                    Name:
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="pt-4">
                    Email:
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="pt-4">
                    Password:
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <input type="submit" name="newAccount" value="Create Account">
            </div>
        </form>
</section>

<?php
include "footer.php";
?>