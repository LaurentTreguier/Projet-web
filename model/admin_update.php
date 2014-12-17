<?php
$table = ($_POST["id_bdd"]);
$champ=($_POST["champ"]);  
$contenu=($_POST["contenu"]);  


$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
$result = $mysqli->query("UPDATE `$table` SET `$champ`=`$contenu` ");
?>