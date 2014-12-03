<?php
    require_once "config.php";
    
    class Table
    {
        private $members;

        public function __construct()
        {
            $this->members = (new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]))
                              ->query("SELECT * FROM `$table` WHERE `$idName`='$id'")
                              ->fetch_assoc();
        }
        
        public function __construct($table, $idName, $id)
        {            
           $this->members=(new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]))
                              ->query("INSERT INTO table 'Data' VALUES(".$_POST['login']);
        }
        
        public function __get($memberName)
        {
            return $this->members[$memberName];
        }
        
    }
?>
