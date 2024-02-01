<?php
include 'db.php';
include 'registerinsert.php';
$loginCheck='';
$errormassage='';
$successmassage='';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $result = $conn->prepare("SELECT * FROM `user` WHERE email=? AND password=? ");
    if(empty($email)|| empty($password)){
        $errormassage=true;
    }else{
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        if ($result->rowCount()>0){
            $successmassage=true;
        }else{
            $loginCheck=true;
        }
    }
    
}
?>