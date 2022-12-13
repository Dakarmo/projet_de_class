<pre>
<?php
/*********
 * un commentaire en PHP
 */
// $MaVariable;
// $MonAutreVariable;
// $Number=2;
// $Number2=10;
// $Array = array("one", "two", "three", 15, 15.5);
// $String="hilary";

// //rechercher en PHP:
// /*
// -> La concatenation,
// -> l'incrémentation,
// -> la décrémentation,
// -> les opérateurs,
// -> les boucles,
// -> les syntaxes conditionnelles,
// -> les affichages
// */

// // La concaténation en PHP se fait grâce au point (.)
// //Exemple
// echo "Ceci est la concatenation de ma variable number".$Number." et de ma variable string".$String;
// /****
//  * les Opérateurs
//  * Nous avons quatre type d'opérateur
//  * -> Arithmetic 
//  * -> Affectation
//  * -> Comparaison
//  * -> Incrementation/Décrémentation
//  * -> Logique
//  * -> Chaine
//  * -> Tableau
//  * -> Affectation conditionnelle
//  */

//  //les opérateurs Arithmetic sont : +, -, *, /, %, **

//  //Les opèrateurs d'affectation sont: =, +=, -=, /=, *=, %=

//  //Les opérateurs de comparaison sont: ==, ===, !=, <>, !==, >, <, >=, <=, <=>

// $x = 5;  
// $y = 10;

// echo ($x <=> $y); // returns -1 because $x is less than $y
// echo "<br>";

// $x = 10;  
// $y = 10;

// echo ($x <=> $y); // returns 0 because values are equal
// echo "<br>";

// $x = 15;  
// $y = 10;

// echo ($x <=> $y); // returns +1 because $x is greater than $y

// //Les opérateurs Incrementation/Décrémentation sont: ++$x, $x++, $x--, --$x

// //Les opérateurs logique sont: and, &&, or, || ,xor , !

// //Les opérateurs de chaine de caractère sont: . , .=

// //Les opérateurs de Tableau sont: +, ==, ===, !=, <>, !==
// //+ correspond à l'union Exemple:
// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// print_r($x + $y); // union of $x and $y
// //==, === correspond à la comparaison d'égalité. Exemple:
// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x == $y);//Retourne false car le deux tableau sont différents
// //!=, <>, !== correspond à la comparaison de différence Exemple:
// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x !== $y);//Retourne true car le deux tableau sont différents
// //Les opérateurs d'affectation conditionnelle sont: ?:, ??
// //?: correspond à un if en syntaxe ternaire(condition?valeur si vrai:valeur si faux). Exemple 
//  // if empty($user) = TRUE, set $status = "anonymous"
//   echo $status = (empty($user)) ? "anonymous" : "logged in";
//   echo("<br>");

//   $user = "John Doe";
//   // if empty($user) = FALSE, set $status = "logged in"
//   echo $status = (empty($user)) ? "anonymous" : "logged in";
// //?? permet de vérifier l'existence de la variable avant les ?? et retourne l'expression à droite des ?? exemple
// // variable $user is the value of $_GET['user']
//    // and 'anonymous' if it does not exist
//    echo $user = $_GET["user"] ?? "anonymous";
//    echo("<br>");
  
//    // variable $color is "red" if $color does not exist or is null
//    //echo $color = $color ?? "red";

// /***
//  * Les Boucles
//  * -> While
//  * -> do .. while
//  * -> for
//  * -> foreach
// */
//  $tableau=['Article'=>'Velo','Prix'=>'1000000','couleur'=>'Jaune','saison'=>'été'];
// foreach ($tableau as $key => $value) {
//     # code...
// } 
// //Array 
// //Tableau associatif
// $tableau=['Velo','1000000','Jaune','été'];
// foreach ($tableau as $key => $value) {
//     if($value==='Jaune'){
//     echo $key." : ".$value."<br>";}

// } 
// /****
//  * 
//  *    Syntaxe conditionnel
//  * if, if else, if elseif, switch
//  */

//  /*****
//   *  Les affichages il en a quatre
//   * -> echo: affiche tout type de variables mais pas les tableaux
//   * -> print: affiche tout type de variables mais pas les tableaux
//   * -> print_r: affiche tout type de variables y compris les tableaux
//   * -> var_dump: affiche le type et la valeur de la variable.
//   */
// print_r($Array);
// print "<br> $String <br>";
// echo "$String <br>";
// var_dump($Array);
// /***
//  * Les fonctions
//  * function functionName($params) {
//  *   code to be executed;
//  *   return;
//  *  }
//  * */

//  function calculatrice($nbr1,$nbr2)
//  {
//     return $nbr1+$nbr2;
//  }

//   echo calculatrice($Number,$Number2);
//   /**
//    * Passer des arguments par référence
//    *  En PHP, les arguments sont généralement passés par valeur, ce qui signifie qu'une copie de la valeur est utilisée dans la fonction et que la variable qui a été passée dans la fonction ne peut  pas être modifiée.
//    *  Lorsqu'un argument de fonction est passé par référence, les modifications apportées à l'argument modifient également la variable qui a été passée. Pour transformer un argument de fonction en référence, l' & opérateur est utilisé :
//    * function add_five(&$value) {
//    *    $value += 5;
//    *   }
//    *
//    *       $num = 2;
//    *      add_five($num);
//    *     echo $num;
//    */
  var_dump($GLOBALS);
//facultatif quand le fichier contieny uniquement du php?>


</pre>