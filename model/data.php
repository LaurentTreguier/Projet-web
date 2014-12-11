<?php
    require_once "table.php";
    
    class Data extends Table
    {
    	//private $members;
        function __construct($id)
        {
        	parent::__construct("data", "identifiant", $id);  
           /* $this->members=(new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]))
            ->query("INSERT INTO `data` ('identifiant') VALUES (".$id.")");*/
        }

        public function set($prenom, $nom, $mail, $portable, $date_naissance, $login)
        {
            
        	$this->members=(new mysqli($GLOBALS["config"]["address"], $GLOBALS["config"]["login"], $GLOBALS["config"]["password"], $GLOBALS["config"]["name"]))
        	->query("UPDATE 'Data' SET 'prenom_fils='"."$prenom,".'nom_fils='."$nom,".'ddn_fils='."$date_naissance,".'tel_mobile='."$portable,".'couriel='."$mail,"."WHERE 'identifiant='".$login);
            
        }
    }
?>
