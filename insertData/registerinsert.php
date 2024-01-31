<?php
include '../database/db.php';
$successmassage='';
if(isset($_POST['signup'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];

    $result=$conn->prepare("INSERT INTO user(username,email,password,age) VALUES(?,?,?,?)");
    $result->bindValue(1,$username);
    $result->bindValue(2,$email);
    $result->bindValue(3,$password);
    $result->bindValue(4,$age);
    if($result->execute()){
        $successmassage=true;
    }else{
        $successmassage=false;
    }
}