<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/Projet-web/bootstrap/css/bootstrap.css" media="screen">
		<link rel="text/javascript" href="bootstrap/js/bootstrap.js" media="screen">
		<script src="lib/jquery-1.11.1.min.js"></script>
		
		<script type="text/javascript" src="views/script-documents.js"></script>
		<script> 
$(document).ready(function() 
{  
 $("td").click(function()  
  { 
   if( $(this).attr("contenteditable") == "true") 
   {    
	    // le"id" du td doit contenir l'id de la BDD (ou pas!)
	    // le "name" doit contenir le nom du champ à modifier 
	    var contenu_avant = $(this).text(); 
	                var id_bdd = $(this).attr("id"); 
	                var champ_bdd = $(this).attr("name"); 
	   alert("avant =" + contenu_avant + "id: " + id_bdd + "name " + champ_bdd);   
	    $(this).blur(function(){ 
	        var contenu_apres = $(this).text(); 
	        //alert("contenu apres = " + contenu_apres); 
	         
	        if (contenu_avant != contenu_apres){ 
	          parametre='id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres ; 
	          //alert(param) ; 
	          $.ajax({ 
	            url: "model/admin_update.php",  
	            type: "POST",
	            dataType:"html",  
	            data: parametre,  
	            success: function (html, statut) {
					alert(html+",,,"+statut);
				}
				error: function (html, statut, erreur) {
       				alert(erreur + ",,," + html+",,,"+statut);
       			}
	          }); 
	        } 
	          
	    });      
   };     
             
  }); 
});   

   
</script> 
	

	

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
	    $result = $mysqli->query("SELECT DISTINCT `libelle`, `promo`, `id` FROM `document`");
	    $row = $result->fetch_assoc();
			while($row){
				if ($row["libelle"] != '') {
					echo '<tr><td id="'.$row["id"].'" contenteditable="true" name="libelle">'.$row["libelle"].'</td>';
				}
				
					echo '<td id="'.$row["id"].'" contenteditable="true" name="promo">'.$row["promo"].'</td> </tr>';
				
	 			$row = $result->fetch_assoc();
			}	
	?>        
		</tbody>
	</table>
</div>
	 <!-- <button class="button" onclick="$('#gestion_data').toggle();" >Gérer les données</button>
	 	<div id="gestion_data" style="display: none" >
	 		<table class="table table-striped" id="example">
	    <thead>
	        <tr>
	        	<th> identifiant</th>
	            <th>nom_fils</th>
	            <th>prenom_fils </th>
	            <th>Date de naissance</th>
	            <th>courriel</th>
	            <th> Mobile </th>
	        </tr>
	    </thead>
	    <tbody>
	    
	    <?php
	 		/*$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
	    $result = $mysqli->query("SELECT * FROM `data`");
	    $row = $result->fetch_assoc();
	 			while($row){
	 				echo '<tr><td id="'.$row["identifiant"].'" contenteditable="true" name="identifiant">'.$row["identifiant"].'</td>';
	 				echo '<td id="'.$row["identifiant"].'" contenteditable="true" name="nom_fils">'.$row["nom_fils"].'</td>
	 				<td id="'.$row["identifiant"].'" contenteditable="true" name="prenom_fils">'.$row["prenom_fils"].'</td>
	 				<td id="'.$row["identifiant"].'" contenteditable="true" name="ddn_fils">'.$row["ddn_fils"].'</td>
	 				<td id="'.$row["identifiant"].'" contenteditable="true" name="courriel">'.$row["courriel"].'</td>
	 				<td id="'.$row["identifiant"].'" contenteditable="true" name="tel_mobile">'.$row["tel_mobile"].'</td></tr>';
	 				
	 			$row = $result->fetch_assoc();
	 			}	*/
	 	?>        
	 		    </tbody>
	 		</table>
	 	</div>  -->
</body>
</html>