<?php
// J'inclus le ou les fichiers models en relation avec ce controller au minimum un fichier model par controller
require_once "models/usersModel.php";

// Au sein de chaque fonction du controller, j'utilise les fonctions du model ou j'appelle les fonctions du model.
function CreateUser(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["id_user"]) && isset($_POST["pwd"]) && isset($_POST["cpwd"])){
            if(stripslashes(trim($_POST["pwd"]))==stripslashes(trim($_POST["cpwd"]))){
                $password=password_hash(stripslashes(trim($_POST["pwd"])),PASSWORD_DEFAULT);
                // J'appelle la fonction InsertUser() depuis le model afin d'ajouter les données en base
                InsertUser([stripslashes(trim($_POST["fname"])),stripslashes(trim($_POST["lname"])),stripslashes(trim($_POST["id_user"])),$password]);
            }
        }
    }
    // J'appelle la fonction GetAllUsers() depuis le model qui me permet de recuperer tous les utilisateurs en base
    $users=GetAllUsers();
    $num=1;
    // Chargement du formulaire
    include_once 'views/formulaire.phtml';
}
function UserDelete(){
    if(isset($_GET['id'])){
        // J'appelle DeleteUser() depuis le model, qui me permet de supprimer un utilisateur en fonction de son id 
        DeleteUser(intval($_GET['id']));
        header("location: index.php");
        exit();
    }else{
        header("location: index.php");
        exit();
    }
}
