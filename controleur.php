<?php
	require_once("model/config.php");
/*	require_once 'model/table.php';*/
	require_once('model/data.php');
	require_once("lib/limonade.php");
	

function identification(){
	return html('identification.php') ;
}

function valider(){
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];;

	$_POST['mdp'];
	if($mdp===$GLOBALS['cle']){//si le mdp est valide verifie si le mail existe 
		echo "$login";			//si oui renvoit les infos sinon crée l'utilisateur dans la base de donnée
		
		$bob = new Data($login);
		$x=$bob->nom_fils;	
		if(isset($x)){//le mail existe dans la base de donné on renvoit les templates qui vont bien avec les info utilisateurs.
			echo "ca marche!!!";
		}
		else{//le mail n'existe pas dans la bdd, on le rajoute et on renvoit les templates.
			
    		echo "marche passss!!!!";}
		//return html('analyze.php');
		}
		else{
			echo "fuck off";
			echo "$mdp";
		}
	
}

?>