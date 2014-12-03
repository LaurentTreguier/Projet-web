<?php 

require_once("model/config.php");
/*	require_once 'model/table.php';*/
	require_once('model/data.php');
	require_once("lib/limonade.php");
	?>
<html>
	
	<body>
	<div>
	Vous pouvez modifier ces informations à tous moments.
		<form>
			<label>Nom de l'étudiant</label><input type="text" name="nom" value='<?php echo "$eleve->nom_fils";' ?>">
			<label>Prénom de l'étudiant</label><input type="text" name="prenom">
		</form>
	</div>		

	</body>
</html>