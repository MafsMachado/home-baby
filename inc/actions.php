<?php
session_start();

include 'config.php';

$act = $_GET['act'];

if($act == 'login'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $stmt = $conn->prepare("SELECT COUNT(*) AS tot, ID FROM cliente WHERE email=? AND password=?");
    if($stmt === false and $debug)
        die('Erro: '.$conn->error);

    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['tot'] == 1){ //login válido
        $_SESSION['login'] = true;
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['name'] = $row['name'];
        if ($email == "admin@home&baby.com"){
            header('Location: ../admin.php');
        }
        else{
            header('Location: ../account.php');}
    }
    else
        header('Location: ../login.php?msg=loginErr');

    

    $stmt->close();

}
else if ($act == 'newAccount'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $name = $_POST['name'];

    if($email == "" || $password == "" || $name == "")
        die('Required fields missing');

    $stmt = $conn->prepare ("INSERT INTO cliente (email, password, name) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $email, $password, $name);
    $stmt->execute();

    $_SESSION['login'] = true;

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        header('Location: ../account.php');
    
    $stmt->close();
    
}
else if ($act == 'logout'){
    session_destroy();
    header('Location: ../index.php');
}
else {
    echo "Error, this action does not exist";
}


?>