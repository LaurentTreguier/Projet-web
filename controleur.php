<?php
	require_once("model/config.php");
/*	require_once 'model/table.php';*/
	require_once('model/data.php');
	require_once("lib/limonade.php");
	
	
	
	 //On crée l'objet qui correspond au client dans la BDD.

function identification(){
	return html('identification.php') ;
}

function valider_login(){
	$mdp=$_POST['mdp'];
	if($mdp===$GLOBALS['cle']){//si le mdp est valide verifie si le mail existe 
		//echo "$login";			//si oui renvoit les infos sinon crée l'utilisateur dans la base de donnée
		
		$login=$_POST['login'];
		$eleve = new Data($login);
		
		if(isset($eleve->nom_fils)){//le mail existe dans la base de donné on renvoit les templates qui vont bien avec les info utilisateurs.
			//echo "bob marche";
			return html('layout_principal.php');
			
		}
		else{//le mail n'existe pas dans la bdd, on le rajoute et on renvoit les templates.
			$nouvel_eleve = new Table('Data', 'identifiant', $login);
			return html('layout_principal.php');
    		}
		//return html('analyze.php');
		}
		else{
			echo "fuck off";
			echo "$mdp";
		}
}

function valider_modif(){//inscrit les modifs du formulaire dans la BDD

	$nom_fils = $_POST['nom'];
	$prenom_fils = $_POST['prenom'];
	$date_naissance = $_POST['date_naissance'];
	$tel = $_POST['portable'];
	$mail = $_POST['mail'];


}

?>