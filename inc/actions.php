<?php
session_start();

include 'config.php';

$act = $_GET['act'];

if($act == 'login'){
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $stmt = $conn->prepare("SELECT COUNT(*) AS tot, ID, name FROM cliente WHERE email=? AND password=?");
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
else if($act == 'newProduct'){
    $titulo = $_POST['titulo'];
    $ID_marca = $_POST['ID_marca'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $ID_categoria = $_POST['ID_categoria'];
    $ID_sub_categoria = $_POST['ID_sub_categoria'];
    $ID_tipo_produto = $_POST['ID_tipo_produto'];
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];
    $img4 = $_FILES['img4'];

    // foto não pode ser mair de 10MB
    if($img1['size'] > 10000000 || $img2['size'] > 10000000 || $img3['size'] > 10000000 || $img4['size'] > 10000000){ 
        echo "File too large";
        exit;
    }

    // obter extensão do ficheiro
    $fileExt = strtolower(pathinfo($img1['name'], PATHINFO_EXTENSION)) || strtolower(pathinfo($img2['name'], PATHINFO_EXTENSION)) || strtolower(pathinfo($img3['name'], PATHINFO_EXTENSION)) || strtolower(pathinfo($img4['name'], PATHINFO_EXTENSION));

    // tipos de ficheiros permitidos
    if(!in_array($fileExt, array('jpg', 'jpeg', 'bmp', 'gif', 'png', 'webp'))){
        echo "That's only allowed WEBP, PNG, JPG, BMP, GIF!!";
        exit;
    }
    
    $fileName = uniqid().".".$fileExt;

    if($ID_categoria == 1){
        move_uploaded_file($img1['tmp_name'], "../img/product home/".$fileName);
        move_uploaded_file($img2['tmp_name'], "../img/product home/".$fileName);
        move_uploaded_file($img3['tmp_name'], "../img/product home/".$fileName);
        move_uploaded_file($img4['tmp_name'], "../img/product home/".$fileName);
    }
    else{
        move_uploaded_file($img1['tmp_name'], "../img/product baby/".$fileName);
        move_uploaded_file($img2['tmp_name'], "../img/product baby/".$fileName);
        move_uploaded_file($img3['tmp_name'], "../img/product baby/".$fileName);
        move_uploaded_file($img4['tmp_name'], "../img/product baby/".$fileName);
    }

    $stmt = $conn->prepare ("INSERT INTO produtos (titulo, ID_marca, preco, descricao, ID_categoria, ID_sub_categoria, ID_tipo_produto, img1, img2, img3, img4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sidsiiissss", $titulo, $ID_marca, $preco, $descricao, $ID_categoria, $ID_sub_categoria, $ID_tipo_produto, $fileName, $fileName, $fileName, $fileName);
    $stmt->execute();
    
    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_products.php');
        exit();
    }

    $stmt->close();

}
else if($act == 'editProduct'){
    $ID = $_POST['ID'];
    $titulo = $_POST['titulo'];
    $ID_marca = $_POST['ID_marca'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $ID_categoria = $_POST['ID_categoria'];
    $ID_sub_categoria = $_POST['ID_sub_categoria'];
    $ID_tipo_produto = $_POST['ID_tipo_produto'];
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];
    $img4 = $_FILES['img4'];


    if($img1['size'] > 10000000 || $img2['size'] > 10000000 || $img3['size'] > 10000000 || $img4['size'] > 10000000){ 
        $stmt = $conn->prepare('SELECT img1, img2, img3, img4 FROM produtos WHERE ID = ?');
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        unlink("../img/product home/".$row['img1']);
        unlink("../img/product home/".$row['img2']);
        unlink("../img/product home/".$row['img3']);
        unlink("../img/product home/".$row['img4']);

        if($stmt->error)
            die("Error: ".$stmt->error);

        $stmt->close();

        // foto não pode ser mair de 10MB
        if($img1['size'] > 10000000 || $img2['size'] > 10000000 || $img3['size'] > 10000000 || $img4['size'] > 10000000){ 
            echo "File too large";
            exit;
        }

        // tipos de ficheiros permitidos
        if(!in_array($fileExt, array('jpg', 'jpeg', 'bmp', 'gif', 'png', 'webp'))){
            echo "That's only allowed WEBP, PNG, JPG, BMP, GIF!!";
            exit;
        }
        
        $fileName = uniqid().".".$fileExt;

        if($ID_categoria == 1){
            move_uploaded_file($img1['tmp_name'], "../img/product home/".$fileName);
            move_uploaded_file($img2['tmp_name'], "../img/product home/".$fileName);
            move_uploaded_file($img3['tmp_name'], "../img/product home/".$fileName);
            move_uploaded_file($img4['tmp_name'], "../img/product home/".$fileName);
        }
        else{
            move_uploaded_file($img1['tmp_name'], "../img/product baby/".$fileName);
            move_uploaded_file($img2['tmp_name'], "../img/product baby/".$fileName);
            move_uploaded_file($img3['tmp_name'], "../img/product baby/".$fileName);
            move_uploaded_file($img4['tmp_name'], "../img/product baby/".$fileName);
        }

        $stmt = $conn->prepare("UPDATE produtos SET img1 = ?, img2 = ?, img3 = ?, img4 = ? WHERE ID = ?");
        $stmt->bind_param("ssssi", $fileName, $fileName, $fileName, $fileName, $ID);
        $stmt->execute();

        if($stmt->affected_rows === 0)
            echo "Error, try again";
        
        $stmt->close();
    }

    $stmt = $conn->prepare("UPDATE produtos SET titulo = ?, ID_marca = ?, preco = ?, descricao = ?, ID_categoria = ?, ID_sub_categoria = ?, ID_tipo_produto = ? WHERE ID = ?");
    $stmt->bind_param("sidsiiisi", $titulo, $ID_marca, $preco, $descricao, $ID_categoria, $ID_sub_categoria, $ID_tipo_produto, $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        echo 'admin_products.php';
    
    $stmt->close();

}
else if($act == 'deleteProduct'){

}
else {
    echo "Error, this action does not exist";
}


?>