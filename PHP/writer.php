<?php
include 'db.php';
$num = 1;
if(isset($_POST['Record'])){
 
    $name=$_POST['name'];
    $result=$conn->prepare("INSERT INTO writers(name) VALUES(?)");
    $result->bindValue(1,$name);
    $result->execute();
}
$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);