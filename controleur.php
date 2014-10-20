<?php
	require_once("model/config.php");
	require_once 'model/table.php';
	require_once("lib/limonade.php");
	

function identification(){
	return html('identification.php') ;
}

function valider(){
	$login=params("login");
	$mdp=params("mdp");

	if(strcmp($mdp,$GLOBALS['cle'])){
		
		new document($login);
		return html('analyze.php');
	}
	else{
		echo "fuck off";
	}
	

	

}

?>