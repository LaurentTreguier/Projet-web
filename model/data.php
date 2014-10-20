<?php
<<<<<<< HEAD
    require_once "table.php";
    
    class Data extends Table
    {
        public function __construct($id)
        {
            parent::__construct("data", $id);
        }
    }
?>
=======

class data{
	private $members;


	function __construct($id){
		$mysqli = new mysqli("127.0.0.1", "root", "", "rentree");
		
		$this->members = $mysqli->query("SELECT * FROM data WHERE id=".$id)->fetch_assoc();
		/*foreach ($members as $key => $value) {
			echo $key;
		}*/

	}

	public function __get($member)
	{
		return $this->members[$member];
	}

}
?>
>>>>>>> bce8ec8592fdb5b4aeec8abd8001aa57a1f9eea1
