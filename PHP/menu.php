<?php
include 'db.php';

if(isset($_POST['Record'])){
 
    $title=$_POST['title'];
    $sort=$_POST['sort'];
    $rd=$_POST['rd'];
    $result=$conn->prepare("INSERT INTO menu(title,sort,status) VALUES(?,?,?)");
    $result->bindValue(1,$title);
    $result->bindValue(2,$sort);
    $result->bindValue(3,$rd);
    $result->execute();
}