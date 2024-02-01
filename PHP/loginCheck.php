<?php
include 'db.php';
include 'registerinsert.php';
$loginCheck='';
$errormassage='';
$successmassage='';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $age=$_POST['age'];

    $result = $conn->prepare("SELECT * FROM `user` WHERE email=? AND password=?");
    if(empty($email)|| empty($password)){
        $errormassage=true;
    }else{
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        if ($result->rowCount()>0){
            $rows=$result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['signin']=true;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['age']=$age;
            $_SESSION['username']=$username;
            header('location:../page/index.php');
        }else{
            $loginCheck=true;
        }
    }
    
}
?>