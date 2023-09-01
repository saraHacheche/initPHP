<?php
//print_r($_POST);

$id = $_POST['id'];

$sql = "DELETE FROM client WHERE id = ?";
require_once('db/connex.php');
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($id))){
    header("location: client-list.php");
}else{
    print_r($stmt->errorInfo());
}



?>