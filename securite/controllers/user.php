<?php

function UserLogin(){
    $login="pseudo";
    $passwd="mypassword";
    if(isset($_SESSION['login']) && isset($_SESSION['pwd'])){
        header('location: index.php?page='.EncryptData("home"));
        exit();
    }
    if(isset($_POST['login'])){
        
        if($_POST['login']==$login && $_POST['pwd']==$passwd){
            $_SESSION['login']=$_POST['login'];
            $_SESSION['pwd']=$_POST['pwd'];
            header('location: index.php?page='.EncryptData("home"));
            exit();
        }else{
            $msg_error="Login or Password Error";
        }
    }

    include 'views/login.phtml';
}

function Home(){
    if(!isset($_SESSION['login']) && !isset($_SESSION['pwd'])){
        header('location: index.php?page='.EncryptData("login"));
        exit();
    }
    $pseudo=$_SESSION['login'];
    include 'views/home.phtml';
}
function Disconnect(){
    session_destroy();
    header('location: index.php?page='.EncryptData("login"));
    exit();
}
