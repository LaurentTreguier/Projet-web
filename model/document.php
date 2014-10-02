<?php

class document{
	private $doc;


	function __construct($id){
		$mysqli = new mysqli("127.0.0.1", "root", "", "rentree");
		
		$this->doc = $mysqli->query("SELECT * FROM document WHERE id=".$id)->fetch_assoc();
	}

	public function __get($arg)
	{
		return $this->doc[$arg];
	}


}