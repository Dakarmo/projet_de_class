<?php
function NomRobot($name)
{
    if (empty($name)) {
        $lettre = chr(rand(65, 90)) . chr(rand(65, 90));
        $nombre = str_pad(rand(0, 9999), 4, "0", STR_PAD_LEFT);
        return $lettre."-".$nombre;
    }else{
        if(verification($name)){
            return $name;
        }else{
            return false;
        }
    }
}


function Moralite($tab){
   if(empty($tab)){
    $tableau=["Gentille","Mechant_Tueur","Adorable"];
    $tab=$tableau[rand(0,2)];
   }
   switch($tab){
    case "Gentille":
        return " Voulez-vous un café ? MR ou MME";
        break;

    case "Mechant_Tueur":
        return '<p style="color:red  ">EXTERMINATION EXTERMINATION<p>';
        break;   

    case "Adorable"  :
        return '<p style="color:blue">Tenez, je vous offre mon coeur MR ou MME<p>';
        break;  
   }  
}

function verification($name){
 $pattern="/^([A-Z]){2}-([0-9]){4}$/";
 if(!preg_match($pattern,$name)){
    return false;
 }else{
    return true;
 }
}
   




