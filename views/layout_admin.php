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
	$mysqli = new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]);
    $result = $mysqli->query("SELECT * FROM `document`");
    $row = $result->fetch_assoc();
    
		echo $row['promo'];
	
?>
	<table class="table table-striped">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>
</body>
</html>