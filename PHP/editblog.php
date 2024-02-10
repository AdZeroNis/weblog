<?php
include 'db.php';

$id=$_GET['id'];











$result=$conn->prepare("SELECT * FROM blog WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
$blogs=$result->fetch(PDO::FETCH_ASSOC);


$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);