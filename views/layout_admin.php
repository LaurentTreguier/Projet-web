<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/Projet-web/bootstrap/css/bootstrap.css" media="screen">
		<link rel="text/javascript" href="bootstrap/js/bootstrap.js" media="screen">
		<script src="lib/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="views/script-documents.js"></script>
		
		
		<title>Admin</title>
	</head>
<body>
	<h4>Panneau d'administration </h4>
<?php
require_once 'model/table.php';
require_once 'model/document.php';
?>
<button class="button" onclick="$('#gestion_promo').toggle();" >Gérer les promotions</button>
<div id="gestion_promo" style="display: none" >
	<table class="table table-striped" id="example">
	    <thead>
	        <tr>
	        	<th> libelle </th>
	            <th>Promo</th>
	        </tr>
	    </thead>
	    <tbody>
	    
	    <?php
		$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
	    $result = $mysqli->query("SELECT DISTINCT `libelle`, `promo` FROM `document`");
	    $row = $result->fetch_assoc();
			while($row){
				if ($row["libelle"] != '') {
					echo '<tr><td>'.$row["libelle"].'</td>';
				}
				
					echo '<td>'.$row["promo"].'</td> </tr>';
				
	 			$row = $result->fetch_assoc();
			}	
	?>        
		</tbody>
	</table>
</div>
	<button class="button" onclick="$('#gestion_data').toggle();" >Gérer les données</button>
<div id="gestion_data" style="display: none" >
		<table class="table table-striped">
	    <thead>
	        <tr>
	        	<th> identifiant</th>
	            <th>nom_fils</th>
	            <th>prenom_fils </th>
	            <th>Date de naissance</th>
	            <th> Mobile </th>
	            <th>courriel</th>
	        </tr>
	    </thead>
	    <tbody>
	    
	    <?php
		$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
	    $result = $mysqli->query("SELECT * FROM `data`");
	    $row = $result->fetch_assoc();
			while($row){
				echo '<tr><td>'.$row["identifiant"].'</td>';
				echo '<td>'.$row["nom_fils"].'</td><td>'.$row["prenom_fils"].
				'</td><td>'.$row["ddn_fils"].'</td><td>'.$row["tel_mobile"].
				'</td><td>'.$row["courriel"].'</td>'.'</tr>';
				
	 			$row = $result->fetch_assoc();
			}	
	?>        
		    </tbody>
		</table>
</div>
</body>
</html>