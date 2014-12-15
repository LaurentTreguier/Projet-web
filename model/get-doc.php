<?php
require_once 'table.php';
require_once 'document.php';
//document commun à toutes les promotiosn.


$selection = $_GET['select'];
$mysqli= (new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]));
$result = $mysqli->query("SELECT * FROM `document` ORDER BY 'rang'");
$row = $result->fetch_assoc();

while ($row) {


	if ($row['promo'] == "$selection") {
		echo '<div id="doc_promo">';
		//echo $row['libelle'];
		echo '<a target=" "  href='.'pdf/'.$row['fichier'].'>'.$row['libelle'].'</a></div>';
	}

	elseif ($row['promo'] == '') {
		echo '<div id="doc_commun">';
		echo '<a target=" "  href='.'pdf/'.$row['fichier'].'>'.$row['libelle'].'</a></div>';
	}

		
$row = $result->fetch_assoc();
}


//Chercher les fichiers correspondents à la selection sur le serveeur.

?>