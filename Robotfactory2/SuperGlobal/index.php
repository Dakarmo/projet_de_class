<?php
/*****
 * Les Variables super Globales sont des tableaux associtifs
 *  $GLOBALS
 *   $_SERVER
 *   $_REQUEST
 *   $_POST
 *   $_GET
 *   $_FILES
 *   $_ENV
 *   $_COOKIE
 *   $_SESSION
 */
// $GLOBALS permet d'enregistrer vos variable de façon globale
//Pouvant êter utiliser partout sur le même serveur php
$GLOBALS['index']="valeur";
$GLOBALS['cle']="autre valeur";
// var_dump($GLOBALS);
// $_SERVER retourne de information par rapport au serveur 
//et au visiteur
//$_REQUEST permet de récuperer les données d'un formulaire qui a ete soumis que ce soit en methode get ou en methode post
// var_dump($_REQUEST);
// echo '<form method="get" action="'.$_SERVER['PHP_SELF'].'">
// Name: <input type="text" name="fname">
// <input type="submit">
// </form>';
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     // collect value of input field
//     $name = htmlspecialchars($_REQUEST['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }
//$_POST permet de récuperer les données d'un formulaire soumis en méthode post uniquement

// var_dump($_POST);
// if (!empty($_POST)) {
//     // collect value of input field
//     $name = htmlspecialchars($_POST['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }
// echo '<form method="post" action="">
// Name: <input type="text" name="fname">
// <input type="submit">
// </form>';

//$_GET permet de récuperer les données d'un formulaire soumis en méthode get uniquement


// var_dump($_GET);
// if (!empty($_GET)) {
//     // collect value of input field
//     $name = htmlspecialchars($_GET['fname']);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }
// echo '<form method="get" action="">
// Name: <input type="text" name="fname">
// <input type="submit">
// </form>';

// $_FILES permet de recuperer les fichier soumis dans un formulaire . 

// var_dump($_FILES);
// if (!empty($_FILES)) {
//     // collect value of input field
//     $name = htmlspecialchars($_FILES["fichier"]["name"]);
//     if (empty($name)) {
//         echo "Name is empty";
//     } else {
//         echo $name;
//     }
// }
// echo '<form method="post" action="" enctype="multipart/form-data">
// Name: <input type="text" name="fname">
// <input type="submit">
// <input type="file" name="fichier" >
// </form>';

//$_ENV permet de gerer les variables d'environnement
// $_ENV["key"]="value";

// var_dump($_ENV);

// $_SESSION permet de stocker les données de session.Il fonctionne uniquement avec les méthodes/fonctions de session . la première c'est session_start() pour demarrer une nouvelle session avant tout ajout de variable session. Cette variable session, elle est super 👌👌. 

// session_start();
// $_SESSION["user"]="Elisee";
// var_dump($_SESSION);

/**
 * Les imports de fichier 
 * include
 * include_once
 * require
 * require_once
 * 
 * 
 */
//include permet d'inclure le code d'un autre fichier dans le fichier courant . 

// include "config.php";
// include "config.php";
// echo "<br>".' Papa va te taper'."<br>";


// require permet d'inclure le code d'un autre fichier dans le fichier courant et oblige l'existence du fichier requis pour que le code puisse s'exécuter.

// require "config.php";
// echo " maman va te taper";


// require_once/ include_once ne vont permettre l'inclusion du code qu'une seule fois.  

// include_once "config.php";
include_once "config.php";
// require_once "config.php";
// require_once "config.php";
