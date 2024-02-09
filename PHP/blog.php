<?php
include 'db.php';

echo $date = jdate("Y/n/j");

$result=$conn->prepare("SELECT * FROM writers");
$result->execute();
$writers=$result->fetchAll(PDO::FETCH_ASSOC);