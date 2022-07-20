<?php

$debug = true;

$server = 'localhost';
$username = 'root';
$password = 'root';
$db = 'home&baby';

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn->connect_error){
    echo "Can't connect to the database:".$conn->connect_error;
    exit;
}
    

?>