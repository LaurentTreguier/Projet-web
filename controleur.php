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
			
			//$eleve->new_id($login);

		$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
        $result = $mysqli->query("INSERT INTO `data`(`identifiant`) VALUES (".$login.")");
        
			return html('layout_principal.php');
    		
		//return html('analyze.php');
		}
	}
		else{
			echo "Erreur de mot de passe.";
			echo "$mdp";
		}
}

function valider_modif(){//inscrit les modifs du formulaire dans la BDD
	$login = $_POST['identifiant'];
	$nom_fils = $_POST['nom'];
	$prenom_fils = $_POST['prenom'];
	$date_naissance = $_POST['date_naissance'];
	$tel = $_POST['portable'];
	$mail = $_POST['mail'];
	//set($prenom_fils, $nom_fils, $mail, $tel, $date_naissance, $login);

	$mysqli= (new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]));
	/*$result = $mysqli->query("UPDATE `data` SET `nom_fils`=".$nom_fils." `prenom_fils`=".$prenom_fils." `ddn_fils`=".$date_naissance." `tel_mobile`=".$tel." 
				`courriel`=".$mail." WHERE `identifiant`=".$login);*/

$result = $mysqli->query("UPDATE `data` SET `nom_fils`="."'$nom_fils'".", `prenom_fils`="."'$prenom_fils'".
	", `ddn_fils`="."'$date_naissance'".", `tel_mobile`="."'$tel'".", `courriel`="."'$mail'"." WHERE `identifiant`="."'$login'");

	if ($result==1) {
		
	}
	

}

?>