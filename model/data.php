<?php

class data{
	private $members;


	function __construct($id){
		$mysqli = new mysqli("127.0.0.1", "root", "", "rentree");
		
		$members = $mysqli->query("SELECT * FROM data WHERE id=".$id)->fetch_assoc();

		for ($i=0; $i < 2 ; $i++) { 
			for ($j=0; $j < 2; $j++) { 
				echo $members[$i][$j];
			}
		}

	}


}
?>