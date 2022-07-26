<?php
session_start();

include 'config.php';

$act = $_GET['act'];

// LOGIN ************************************************************************************
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
// NEW ACCOUNT ************************************************************************************
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
// LOG OUT ************************************************************************************
else if ($act == 'logout'){
    session_destroy();
    header('Location: ../index.php');
}
// NEW PRODUCT ************************************************************************************
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
// EDIT PRODUCT ************************************************************************************
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
// DELETE PRODUCT ************************************************************************************
else if($act == 'deleteProduct'){
    $ID = $_GET['ID'];

    $stmt = $conn->prepare("DELETE FROM produtos WHERE ID=?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Not possible to delete product!";
    else
        echo "Product deleted!";

    $stmt->close();
}
// NEW BRAND ************************************************************************************
else if($act == 'newBrand'){
    $ID = $_POST['ID'];
    $marca = $_POST['marca'];
    $img = $_FILES['img'];

    // foto não pode ser mair de 10MB
    if($img['size'] > 10000000){ 
        echo "File too large";
        exit;
    }

    // obter extensão do ficheiro
    $fileExt = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));

    // tipos de ficheiros permitidos
    if(!in_array($fileExt, array('jpg', 'jpeg', 'bmp', 'gif', 'png', 'webp'))){
        echo "That's only allowed WEBP, PNG, JPG, BMP, GIF!!";
        exit;
    }
    
    $fileName = uniqid().".".$fileExt;
    move_uploaded_file($img['tmp_name'], "../img/brands".$fileName);

    $stmt = $conn->prepare ("INSERT INTO marcas (ID, marca, img) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $ID, $marca, $fileName);
    $stmt->execute();
    
    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_brands.php');
        exit();
    }

    $stmt->close();

}
// EDIT BRAND ************************************************************************************
else if($act == 'editBrand'){
    $ID = $_POST['ID'];
    $marca = $_POST['marca'];
    $img = $_FILES['img'];


    if($img['size'] > 10000000){ 
        $stmt = $conn->prepare('SELECT img FROM marcas WHERE ID = ?');
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        unlink("../img/brands/".$row['img']);

        if($stmt->error)
            die("Error: ".$stmt->error);

        $stmt->close();

        // foto não pode ser mair de 10MB
        if($img['size'] > 10000000){ 
            echo "File too large";
            exit;
        }

        // tipos de ficheiros permitidos
        if(!in_array($fileExt, array('jpg', 'jpeg', 'bmp', 'gif', 'png', 'webp'))){
            echo "That's only allowed WEBP, PNG, JPG, BMP, GIF!!";
            exit;
        }
        
        $fileName = uniqid().".".$fileExt;
        move_uploaded_file($img['tmp_name'], "../img/brands".$fileName);

        $stmt = $conn->prepare("UPDATE marcas SET img = ? WHERE ID = ?");
        $stmt->bind_param("si", $fileName, $ID);
        $stmt->execute();

        if($stmt->affected_rows === 0)
            echo "Error, try again";
        
        $stmt->close();
    }

    $stmt = $conn->prepare("UPDATE marcas SET marca = ? WHERE ID = ?");
    $stmt->bind_param("s", $marca, $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        echo 'admin_brands.php';
    
    $stmt->close();

}
// DELETE BRAND ************************************************************************************
else if($act == 'deleteBrand'){
    $ID = $_GET['ID'];

    $stmt = $conn->prepare("DELETE FROM marcas WHERE ID=?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Not possible to delete brand!";
    else
        echo "Brand deleted!";

    $stmt->close();
}
// NEW CATEGORY ************************************************************************************
else if($act == 'newCategory'){
    $ID = $_POST['ID'];
    $categoria = $_POST['categoria'];

    $stmt = $conn->prepare ("INSERT INTO categorias (ID, categoria) VALUES (?, ?)");
    $stmt->bind_param("is", $ID, $categoria);
    $stmt->execute();
    
    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_category.php');
        exit();
    }

    $stmt->close();

}
// EDIT CATEGORY ************************************************************************************
else if($act == 'editCategory'){
    $ID = $_POST['ID'];
    $categoria = $_POST['categoria'];

    $stmt = $conn->prepare("UPDATE categorias SET categoria = ? WHERE ID = ?");
    $stmt->bind_param("si", $categoria, $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else
        echo 'admin_category.php';
    
    $stmt->close();

}
// DELETE CATEGORY ************************************************************************************
else if($act == 'deleteCategory'){
    $ID = $_GET['ID'];

    $stmt = $conn->prepare("DELETE FROM category WHERE ID=?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Not possible to delete category!";
    else
        echo "Category deleted!";

    $stmt->close();
}
// NEW SUB CATEGORY ************************************************************************************
else if($act == 'newSubCategory'){
    $ID = $_POST['ID'];
    $sub_categoria = $_POST['sub_categoria'];
    $ID_categoria = $_POST['ID_categoria'];

    $stmt = $conn->prepare ("INSERT INTO sub_categorias (ID, sub_categoria, ID_categoria) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $ID, $subcategoria, $ID_categoria);
    $stmt->execute();
    
    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_subCategory.php');
        exit();
    }

    $stmt->close();

}
// EDIT SUB CATEGORY ************************************************************************************
else if($act == 'editSubCategory'){
    $ID = $_POST['ID'];
    $sub_categoria = $_POST['sub_categoria'];
    $ID_categoria = $_POST['ID_categoria'];

    $stmt = $conn->prepare("UPDATE sub_categorias SET sub_categoria = ?, ID_categoria = ? WHERE ID = ?");
    $stmt->bind_param("sii", $subcategoria, $ID_categoria, $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_subCategory.php');
        exit();
    }
    
    $stmt->close();

}
// DELETE SUB CATEGORY ************************************************************************************
else if($act == 'deleteSubCategory'){
    $ID = $_GET['ID'];

    $stmt = $conn->prepare("DELETE FROM sub_categorias WHERE ID=?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Not possible to delete sub category!";
    else
        echo "Sub Category deleted!";

    $stmt->close();
}
// NEW PRODUCT TYPE ************************************************************************************
else if($act == 'newProductType'){
    $ID = $_POST['ID'];
    $tipo_produto = $_POST['tipo_produto'];

    $stmt = $conn->prepare ("INSERT INTO tipo_produto (ID, tipo_produto) VALUES (?, ?)");
    $stmt->bind_param("is", $ID, $tipo_produto);
    $stmt->execute();
    
    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_productType.php');
        exit();
    }

    $stmt->close();

}
// EDIT PRODUCT TYPE ************************************************************************************
else if($act == 'editProductType'){
    $ID = $_POST['ID'];
    $tipo_produto = $_POST['tipo_produto'];


    $stmt = $conn->prepare("UPDATE tipo_produto SET tipo_produto = ? WHERE ID = ?");
    $stmt->bind_param("si", $tipo_produto, $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Error, try again";
    else{
        header('Location: ../admin_productType.php');
        exit();
    }
    
    $stmt->close();

}
// DELETE PRODUCT TYPE ************************************************************************************
else if($act == 'deleteProductType'){
    $ID = $_GET['ID'];

    $stmt = $conn->prepare("DELETE FROM tipo_produto WHERE ID=?");
    $stmt->bind_param("i", $ID);
    $stmt->execute();

    if($stmt->affected_rows === 0)
        echo "Not possible to delete product type!";
    else{
        header('Location: ../admin_productType.php');
    }

    $stmt->close();
}
else if($act == 'productDetail'){
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

    $stmt = $conn->prepare("SELECT ID, titulo, ID_marca, preco, descricao, ID_categoria, ID_sub_categoria, ID_tipo_produto, img1, img2, img3, img4 FROM produtos WHERE ID = ?");
    $stmt->bind_param("sidsiiisi", $titulo, $ID_marca, $preco, $descricao, $ID_categoria, $ID_sub_categoria, $ID_tipo_produto, $ID);
    $stmt->execute();

    $stmt->close();
}
else {
    echo "Error, this action does not exist";
}


?>