<?php 
// J'inclus le code du ou des controllers
require_once 'controllers/usersController.php';
// J'appelle les fonctions du ou des controllers en fonction de la variable $_GET["page"]
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'delete':
            UserDelete();
            break;
        default :
        CreateUser();
        break;
    }
}else{
    CreateUser();
}