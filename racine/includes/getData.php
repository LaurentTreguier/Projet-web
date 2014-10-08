<?php

$DbLink = mysql_connect($DbHost, $DbUser, $DbPassword) or die('erreur de connexion au serveur');
mysql_select_db($DbName) or die('erreur de connexion a la base de donnees');
mysql_query("SET NAMES 'utf8'");
$query = "SELECT * FROM data WHERE identifiant LIKE '".$_SESSION['courriel']."'";
$result = mysql_query($query);
$ligne = mysql_fetch_assoc($result);
$identifiant = $ligne['identifiant'];
$nomFils = $ligne['nom_fils'];
$prenomFils = $ligne['prenom_fils'];
$ddn = $ligne['ddn_fils'];
$telMobile = $ligne['tel_mobile'];
$courriel = $ligne['courriel'];
mysql_close();

?>