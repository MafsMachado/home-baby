<?php
include 'inc/config.php';

$pageTitle = 'Login';
include 'header.php';
?>

<?php
    $msg = @$_GET['msg'];

    switch($msg){
        case 'loginErr': echo 'Erro a fazer login'; break;
        case 'noPermission': echo 'Não tem acesso para aceder a este conteúdo, faça login abaixo'; break;
    }
?>

<form action="inc/actions.php?act=login" method="POST" class="form">
    <label>
        <div>Email: </div>
        <input type="text" name="email">
    </label>
    <label>
        <div>Password</div>
        <input type="password" name="password">
    </label>
    <input type="submit" value="Submeter">
</form>

<?php
include "footer.php";
?>