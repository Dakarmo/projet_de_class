<?php
 function database($fname,$lname,$id_user,$pwd){
    try {
        $bdd = new PDO("mysql:host=127.0.0.1; dbname=test", "root", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'connection Etabli';
        //Ajout des donnés dans la base donné
        $requette=$bdd->prepare("INSERT INTO users(nom, prenoms, indentifiant,mdp)VALUES(?,?,?,?)");
        $requette->execute([$fname,$lname,$id_user,$pwd]);
        //Affichage des donnés de la bas de donné
        $requette1=$bdd->query("SELECT * FROM users");
    
        $reponse = $requette1->fetch();
        echo "<pre>";
        print_r($reponse);
        echo "<pre>";
    }catch (PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
    }

 }                                                              