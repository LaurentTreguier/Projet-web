<?php
require_once 'table.php';
require_once 'document.php';
//document commun à toutes les promotiosn.


$selection = $_GET['select'];
$mysqli= (new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]));
$result = $mysqli->query("SELECT * FROM `document` ORDER BY 'rang'");
$row = $result->fetch_assoc();

while ($row) {

	/*foreach ($row as $name => $item ) {
		if ($row['promo'] == ' ' || $row['promo'] == "$selection") {
			echo $name, $item;// a modifier
		}
		else{
			echo "string"."$name, $item";
		}
	}*/
echo '<div id="doc_promo">';
	if ($row['promo'] == "$selection") {
		//echo $row['libelle'];
		echo '<a target=" "  href='.'pdf/'.$row['fichier'].'>'.$row['libelle'].'</a></br>';
	}
echo '</div><div id="doc_commun"';
	if ($row['promo'] == '') {
		echo '<a target=" "  href='.'pdf/'.$row['fichier'].'>'.$row['libelle'].'</a></br>';
	}
echo "</div>";
		
$row = $result->fetch_assoc();
}

$doc = new Document('1');
$doc_liste = $doc->get_documents($selection);

//Chercher les fichiers correspondents à la selection sur le serveeur.

?>