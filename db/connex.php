<?php
$username = "root";
$password=""; 

if ($pdo = new PDO('mysql:host=localhost;dbname=store;port=3306', $username, $password)){
//echo "connected";
}else{
echo "not connected";
}

$pdo-> exec("set names utf8");

?>