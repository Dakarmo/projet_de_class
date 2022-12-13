<?php

$fname = purification(isset($_POST["fname"])? $_POST["fname"]: " ");
$lname = purification(isset($_POST["lname"])? $_POST["lname"]: " ");
$id_user = substr($fname,0,1).$lname;
$pwd = purification(isset($_POST["pwd"])? $_POST["pwd"]: " ");

//connexion à la base de donnée
if(!empty($fname) && !empty($lname) && !empty($pwd)){
    $password_crypt = password_hash($pwd,PASSWORD_DEFAULT);
 
}else{
    echo "<p style = color:red>Verifier les informations que vous avez entrées</p>";
    echo "<a href='../' > retour </a>";
}



function purification ($data) {
    $data1 = trim($data);
    $data2 = stripslashes($data1);
    $data3 = htmlspecialchars($data2);
    return $data3;
}

?>