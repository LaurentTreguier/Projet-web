<?php
	require_once("model/data.php");
	require_once("model/document.php");
	require_once("../limonade-master/lib/limonade.php");
	$cle="isen2012";

function identification(){
	return html('identification.php') ;
}

function valider(){
	$login=params("login");
	$mdp=params("mdp");

	if($mdp=="$cle"){
		//verifie si le mail est present dans la bdd. si oui recuperer les identifiants, si non rentree le mail dans la bdd et affiche la suite.
		new document

	}
	

	return html('analyze.php');

}

?>