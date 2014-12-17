<?php
$id = ($_POST["id_bdd"]);
$champ=($_POST["champ_bdd"]);  
$contenu=($_POST["contenu_apres"]);  


$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
$result = $mysqli->query("UPDATE `document` SET `$champ`='$contenu' WHERE `id`=$id");
$monfichier = fopen("simulation.txt", "a"); 
$trace = "UPDATE `document` SET `$champ`='$contenu' WHERE `id`=$id";
  fputs($monfichier, $trace); 
  fclose($monfichier); 

?