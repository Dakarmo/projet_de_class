<?php
include_once 'database.php';
class usersModel extends database{
public function InsertUser(array $data){
    $this->SendData("INSERT INTO users(Nom, Prenoms, Identifiant, Mdp) VALUES (?,?,?,?)",$data);
}
public function UpdateUser(array $data){
    $this->SendData("UPDATE users SET Nom=?,Prenoms=?,Identifiant=?,Mdp=? WHERE Id=?",$data);
}
public function DeleteUser(int $id){
    $this->SendData("DELETE FROM users WHERE Id=?",[$id]);
}
public function GetAllUsers(){
    return $this->GetManyData("SELECT Id,Nom, Prenoms, Identifiant FROM users");
}
public function GetUserById(int $id){
    return $this->GetOneData("SELECT Id,Nom, Prenoms, Identifiant FROM users WHERE Id=?",[$id]);
}
public function Recherches(array $data){
   return $this->GetManyData("SELECT Id, Nom, Prenoms, Identifiant FROM users WHERE Nom=? or Prenoms=? or Identifiant=?" , $data);
}
}