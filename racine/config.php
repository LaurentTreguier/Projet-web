<?php

  $titre = "Documents de rentrée";
  $annee = "2012";
  $cle = "isen2012";
  
  // informations concernant la base de données
  $DbHost = "127.0.0.1";
  $DbName = "rentree";
  $DbUser = "root";
  $DbPassword = ""; 
  
  $libellePromo = array (
    "1ère année, Cycle Sciences de l'Ingénieur" => "CSI_A1",
    "1ère année, Cycle Informatique et Réseaux (Brest)" => "CIR_BREST_A1",
    "1ère année, Cycle Informatique et Réseaux (Rennes)" => "CIR_RENNES_A1",        
    "1ère année, BTS Prépa" => "BTSPREPA_A1",    
    "2ème année, Cycle Sciences de l'Ingénieur" => "CSI_A2",
    "2ème année, Cycle Informatique et Réseaux (Brest)" => "CIR_BREST_A2",
    "2ème année, Cycle Informatique et Réseaux (Rennes)" => "CIR_RENNES_A2",        
    "2ème année, BTS Prépa" => "BTSPREPA_A2",     
    "3ème année, Cycle Sciences de l'Ingénieur" => "CSI_A3",
    "3ème année, Cycle Informatique et Réseaux (alternant)" => "CIR_A3_ALT",
    "3ème année, Cycle Informatique et Réseaux (non alternant)" => "CIR_A3_NONALT",    
    "3ème année, Apprentissage (ITII)" => "ITII_A3",
    "4ème année, Majeure (M1)" => "M_A4",
    "4ème année, Apprentissage (ITII)" => "ITII_A4",
    "5ème année, Majeure (M2, alternant)" => "M_A5_ALT",
    "5ème année, Majeure (M2, non alternant)" => "M_A5_NONALT",    
    "5ème année, Apprentissage (ITII)" => "ITII_A5"
  );

  require_once("lib.php");
  
?>
