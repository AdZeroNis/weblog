<?php

include 'db.php';

$result=$conn->prepare("SELECT COUNT(id) FROM blog");
$result->execute();
$numblogs=$result->fetch(PDO::FETCH_ASSOC);
foreach($numblogs as $numblog){}
echo $numblog;



$result=$conn->prepare("SELECT COUNT(id) FROM writers");
$result->execute();
$numwriters=$result->fetch(PDO::FETCH_ASSOC);
foreach($numwriters as $numwriter){}
echo $numwriter;


$result=$conn->prepare("SELECT COUNT(id) FROM user");
$result->execute();
$numusers=$result->fetch(PDO::FETCH_ASSOC);
foreach($numusers as $numuser){}
echo $numuser;
?>