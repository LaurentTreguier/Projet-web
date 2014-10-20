<?php
require_once("lib/limonade.php");
require_once("controleur.php");


dispatch("/", "identification");
dispatch_post("/validation/:login/:mdp", "valider");


run();
?>