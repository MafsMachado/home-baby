<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = '127.0.0.1';
$username = 'admin';
$password = 'root';
$db = 'home&baby';
$port = 8889;

$conn = new mysqli($server, $username, $password, $db, $port);

if ($conn->connect_error){
    echo "Can't connect to the database:".$conn->connect_error;
    exit;
}

?>