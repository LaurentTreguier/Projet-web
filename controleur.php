<?php
	require("model/data.php");
	require("model/document.php");
	$bob = new document(9);
	echo $bob->id;
?>