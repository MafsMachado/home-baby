<?php
session_start();
include 'config.php';

$act = $_GET['act'];

if($act == 'login'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);


    $stmt = $conn->prepare("SELECT ID, email, password FROM cliente WHERE email=? AND password=?");
    if($stmt === false and $debug)
        die('Erro: '.$conn->error);

    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $results = $stmt->get_result();
    $row = $results->fetch_assoc();

    
    if ($row['tot'] == 1){ //login válido
        $_SESSION['name'] = $row['name'];
        header('Location: ../account.php');
    }
    else //login inválido
        header('Location: ../login.php?msg=loginErr');

    $stmt->close();
}
else if ($act == 'newAccount'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $name = $_POST['name'];

    if($email == "" || $password == "" || $name == "")
        die('Required fields missing');

    $stmt = $conn->prepare ("INSERT INTO cliente (email, password, nome) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $email, $password, $name);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        header('Location: ../account.php');
    
    $stmt->close();
    
}
else {
    echo "Error, this action does not exist";
}


?>