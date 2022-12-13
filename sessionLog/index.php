<?php include 'homePage.phtml';

if(isset($_POST["connexion"])){
    if(isset($_POST["MonId"]) && isset($_POST["password"])){
    header('location: home.html');
    exit();
    }
}