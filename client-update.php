<?php
//print_r($_POST);
//die();
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];

//echo $address;

$sql = "UPDATE client SET name = ?, address = ?, phone = ?, birthday = ? WHERE id = ?";
require_once('db/connex.php');
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $birthday, $id))){
   // echo "Success";
   header("location: client-list.php");
}else{
    print_r($stmt->errorInfo());
}





?>