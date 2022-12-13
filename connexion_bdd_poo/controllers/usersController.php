<?php
// J'inclus le ou les fichiers models en relation avec ce controller au minimum un fichier model par controller
require_once "models/usersModel.php";
// include 'views/page/formulaire.phtml';
// include 'views/page/connexion.phtml';
// include 'views/page/reservation.phtml';

class usersController
{
    private $model;

    function __construct()
    {
        $this->model=new usersModel();
    }
    public function index(){
        $users = $this->model->GetAllUsers();
        $num = 1;
        $template='views/page/liste.phtml';
        include_once 'views/main.phtml';
    }


    public function CreateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["id_user"]) && isset($_POST["pwd"]) && isset($_POST["cpwd"])) {
                if (stripslashes(trim($_POST["pwd"])) == stripslashes(trim($_POST["cpwd"]))) {
                    $password = password_hash(stripslashes(trim($_POST["pwd"])), PASSWORD_DEFAULT);
                    // J'appelle la fonction InsertUser() depuis le model afin d'ajouter les données en base
                    $this->model->InsertUser([stripslashes(trim($_POST["fname"])), stripslashes(trim($_POST["lname"])), stripslashes(trim($_POST["id_user"])), $password]); 
                    header('location: views/page/connexion.phtml');
                    exit();
                }else{
                    echo 'Mot de pass non conforme';
                }
            }
        }
        // J'appelle la fonction GetAllUsers() depuis le model qui me permet de recuperer tous les utilisateurs en base
       
        // Chargement du formulaire
        $template ='views/page/formulaire.phtml';
        include_once 'views/main.phtml';
    }
    public function UserDelete()
    {
        if (isset($_GET['id'])) {
            // J'appelle DeleteUser() depuis le model, qui me permet de supprimer un utilisateur en fonction de son id 
            $this->model->DeleteUser(intval($_GET['id']));
            header("location: index.php");
            exit();
        } else {
            header("location: index.php");
            exit();
        }
    }

   public function Update()
    {
        $this->model->GetUserById(intval($_GET['id']));
    }

     public function recherche()
    {
        $users = $this->model->Recherches([$_POST['motcle']]);
        $num = 1;
        include_once 'views/formulaire.phtml';
    }
}


function UserLogin(){
    $login=$_POST["id_user"];
    $passwd=$_POST["pwd"];
    if(isset($_SESSION['id_user']) && isset($_SESSION['pwd'])){
        header('location: views/page/reservation.phtml');
        exit();
    }
    if(isset($_POST['id_user'])){
        
        if($_POST['id_user']==$login && $_POST['pwd']==$passwd){
            $_SESSION['id_user']=$_POST['id_user'];
            $_SESSION['pwd']=$_POST['pwd'];
            header('location: views/page/reservation.phtml');
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