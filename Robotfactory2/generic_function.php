<?php
date_default_timezone_set("Africa/Porto-Novo");
function DonneDate(){
    return "Nous sommes le ".date("d m Y")." et il est ".date("H : i : s");
}
function Tirage(){
$nombre=rand(1,10);
    if($nombre%2==0){
        return "J'ai choisi ".$nombre." et il est Pair. Vous avez gagné";
    }else{
        return "J'ai choisi ".$nombre." et il est Impair. Désolée vous aurez plus de chance en Amour";
    }
}
function Comedie($name,$morality){
    if(!empty($name) && !empty($morality)){
        if($morality=='Mechant_Tueur'){
            return "You must Die. No Joke about it. Run....";
        }else{
            return "Mon nom à l'envers s'écrit : ".strrev($name)." Haahahahahahahahahahahahah";
        }
    }
}
