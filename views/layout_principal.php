<?php
	require_once("model/config.php");
	require_once ('model/table.php');
	require_once('model/data.php');
	require_once("lib/limonade.php");
	require_once("controleur.php");
	$eleve = new Data($_POST['login']);
	?>
 
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/projet-web/bootstrap/css/bootstrap.css" media="screen">
		<link rel="text/javascript" href="bootstrap/js/bootstrap.js" media="screen">
		<script src="lib/jquery-1.11.1.min.js"></script>
		<title>Documents de rentrée</title>
	</head>
<body>
<script type="text/javascript" href="script-documents.js"></script>
    <div class="container" id="en-tete">
    	<div class="col-sm-6"><img src="/projet-web/images/logo_ISEN.png"></div>
    	<div class="col-sm-4">Documents de rentrée</div>	 
  		<div class="col-sm-2">Brest - Rennes</div>  		
    </div>  
    <div class="container">
    	<div class="col-sm-6">
	    	<div>
	Vous pouvez modifier ces informations à tous moments.

	<p> Identifiant: <?php echo "$eleve->identifiant"; ?></p>
	<p><u style="color:blue;">Etudiant</u></p>

		<form method="POST" action="?/modification">
		 <?php 
				$nom = "$eleve->nom_fils";	
				$prenom = "$eleve->prenom_fils";
				$date = new DateTime("$eleve->ddn_fils");
				$ddn = $date->format('Y-m-d');
				 			
			?>
			<label>Nom de l'étudiant</label><input type="text" name="nom" value='<?php echo "$nom"; ?>'><br>			
			<label>Prénom de l'étudiant</label><input type="text" name="prenom" value='<?php	echo "$prenom"; ?>' ><br>
			<label>Date de naissance</label><input type="date" name="date_naissance" value='<?php echo "$ddn";	?>' ><br>
		
			</div>		
			<p> <u style="color:blue;">Parents</u> </p>
			<div>
				<label>Téléphone mobile </label><input type="text" name="portable" value='<?php echo "$eleve->tel_mobile" ?>'><br>
				<label> Courriel</label><input type="email" name="mail" value='<?php echo "$eleve->courriel" ?>'>
			</div>
			<input type="submit" value="Valider">
		</form>
		</div>	
		<div class="col-sm-6">
			<h1>Ceci est la colonne de droite!!!</h1>
			<select id="selecteur" >
			<option value="CSI_A1">CSI_A1</option>
			<option value="CSI_A2">CSI_A2</option>
			<option value="CSI_A2">CSI_A3</option>
			<option value="CIR_BREST_A1">CIR_BREST_A1</option>
			<option value="CIR_BREST_A2">CIR_BREST_A2</option>
			<option value="CIR_RENNES_A1">CIR_RENNES_A1</option>
			<option value="CIR_BREST_A2">CIR_RENNES_A2</option>
			<option value="CIR_A3_ALT">CIR_A3_ALT</option>
			<option value="CIR_A3_NONALT">CIR_A3_NONALT</option>
			<option value="ITII_A3">ITII_A3</option>
			<option value="ITII_A4">ITII_A4</option>
			</select>
			<p id="5"></p>
		</div>
	
    </div> 	
	
</body>

</html>