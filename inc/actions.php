<?php
include 'config.php';

$act = $_GET['act'];

if($act == 'login'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $stmt = $conn->prepare ("SELECT COUNT(*) AS tot, ID, email, password FROM cliente WHERE email = ? AND password = ?");
    if($stmt == false and $debug)
        die('Error: '. $conn->error);

    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row['tot'] == 1){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header('Location: account.php');
    }
    else{
        header('Location: login.php?error=1');
    }

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

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        echo "Account created with success";
    
    $stmt->close();
    
}
else {
    echo "Error, this action does not exist";
}


?>