<?php 
// declare(strict_types=1);
date_default_timezone_set("Africa/Porto-Novo");
$lettre = chr(rand(65,90)).chr(rand(65,90));
$nombre = str_pad(rand(0,9999),4,'0', STR_PAD_LEFT);
$date = date("d.m.y");
$heure = date("H.i.s");
$choix = rand(1,10);




if($choix%2==0){
    $ChoixType = "pair";
}else {
    $ChoixType = "impair";
}

$NomEnver = strrev("$lettre-$nombre");


  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon ROBOT</title>
</head>
<body>
    <p>Salut humain, je suis <?= "$lettre-$nombre "?></p>
    <p>Nous sommes le <?= "$date et il est $heure"?></p>
    <p>J'ai choisi <?= "$choix. C'est un mombre  $ChoixType"?></p>
    <p>Mon nom à l'envers est : <?=$NomEnver?></p>
</body>
</html>