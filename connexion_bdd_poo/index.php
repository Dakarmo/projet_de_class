<?php 
// J'inclus le code du ou des controllers
require_once 'controllers/usersController.php';
// J'appelle les fonctions du ou des controllers en fonction de la variable $_GET["page"]
$user=new usersController();
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'insert':
            $user->CreateUser();
            break;
        case 'delete':
            $user->UserDelete();
            break;
        case 'update':
            $user->Update();
            break;
        case 'recherche':
            $user->recherche();
            break;
        default :
        $user->index();
        break;
    }
}else{
    $user->index();
}