<?php
    require_once "table.php";
    
    class Document extends Table
    {
        public function __construct($id)
        {
            parent::__construct("document", "id", $id);
        }
       public function get_documents($libelle)
        {
        	$this->members=(new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]))
        	->query("SELECT 'fichier', 'rang', WHERE libelle=".$libelle." OR libelle="." "."ORDER BY 'rang'");
            
        }
    }
?>
