<?php
include 'db.php';

$id=$_GET['id'];

$result=$conn->prepare("DELETE FROM writers WHERE id=?");
$result->bindValue(1,$id);
$result->execute();
header('location:../page/admin/page/comment.php');