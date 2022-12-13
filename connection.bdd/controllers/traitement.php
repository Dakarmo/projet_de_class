<?php
include "../models/database.php";
    $fname = purification(isset($_POST["fname"])? $_POST["fname"]:"");
    $lname = purification(isset($_POST["lname"])? $_POST["lname"]:"");
    $id_user= substr($fname,0,1).$lname;
    $pwd=password_hash(purification(isset($_POST["pwd"])? $_POST["lname"]:""), PASSWORD_DEFAULT);
    echo $fname.'<br/>';
    echo $lname.'<br/>';
    echo  $id_user.'<br/>';
    
    //Connexion à la base de donné
    if(){
        database($fname,$lname,$id_user,$pwd);
    }

    function purification($data){
        $data1=trim($data);
        $data2= stripslashes($data1);
        $data3=htmlspecialchars($data2);
        return $data3;
    }
?>