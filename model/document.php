<?php
<<<<<<< HEAD
    require_once "table.php";
    
    class Document extends Table
    {
        public function __construct($id)
        {
            parent::__construct("document", $id);
        }
    }
?>
=======

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
>>>>>>> bce8ec8592fdb5b4aeec8abd8001aa57a1f9eea1
