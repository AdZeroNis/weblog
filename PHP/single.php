<?php
include 'db.php';


$blogs=$conn->prepare("SELECT * FROM blog WHERE title=?");
$blogs->bindValue(1,$_GET['post']);
$blogs->execute();
$blogs=$blogs->fetch(PDO::FETCH_ASSOC);

$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);