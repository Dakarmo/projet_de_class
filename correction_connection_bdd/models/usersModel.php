<?php
// J'inclus les fonctions de connexion à la base de données et d'execution de requêtes
require_once 'database.php';
function InsertUser($data){
    SendData("INSERT INTO users(Nom, Prenoms, Identifiant, Mdp) VALUES (?,?,?,?)",$data);
}
function UpdateUser($data){
    SendData("UPDATE users SET Nom=?,Prenoms=?,Identifiant=?,Mdp=? WHERE Id=?",$data);
}
function DeleteUser($id){
    SendData("DELETE FROM users WHERE Id=?",[$id]);
}
function GetAllUsers(){
    return GetManyData("SELECT Id,Nom, Prenoms, Identifiant FROM users");
}
function GetUserById($id){
    return GetOneData("SELECT Id,Nom, Prenoms, Identifiant FROM users WHERE Id=?",[$id]);
}