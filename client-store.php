<?php
//print_r($_POST);

$name  = $_POST['name'];
$address  = $_POST['address'];
$phone  = $_POST['phone'];
$birthday  = $_POST['birthday'];


$sql = "INSERT INTO client (name, address, phone, birthday) VALUES (?, ?, ?, ?)";


require_once('db/connex.php');

$stmt=$pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $birthday))){
   // echo "Success";
   header("location: client-list.php");
}else{
    print_r($stmt->errorInfo());
}



?>