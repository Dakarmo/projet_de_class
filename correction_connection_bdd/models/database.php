<?php
include_once 'asset/config/env.php';
/****
 * Fonction de connexion à la base de donnée.
 */
function ConnectDB(){
        try {
            $bdd = new PDO("mysql:host=".$_ENV['host'].";dbname=".$_ENV['bdd'],$_ENV['userbd'],$_ENV['password']);
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $bdd;
        }catch(PDOException $e){
            return " Une erreur est retrouvée : ".$e->getMessage();
        }
}
/****
 * Fonction d'envoi de données.
 */
function SendData($resquest,$data=NULL){
    try{
        $bdd=ConnectDB();
        $requette = $bdd->prepare($resquest);
        $requette->execute($data);
    }catch(PDOException $e){
        return " Une erreur est retrouvée : ".$e->getMessage();
    }

}
/****
 * Fonction de recupération d'une ligne.
 */
function GetOneData($resquest,$data=NULL){
    try{
        $bdd=ConnectDB();
        $requette = $bdd->prepare($resquest);
        $requette->execute($data);
        return $requette->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        return " Une erreur est retrouvée : ".$e->getMessage();
    }
}
/****
 * Fonction de recupération multi-lignes.
 */
function GetManyData($resquest,$data=NULL){
    try{
        $bdd=ConnectDB();
        $requette = $bdd->prepare($resquest);
        $requette->execute($data);
        return $requette->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        return " Une erreur est retrouvée : ".$e->getMessage();
    }
}
