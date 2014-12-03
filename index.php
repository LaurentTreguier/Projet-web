<?php
require_once("lib/limonade.php");
require_once("controleur.php");


dispatch("/", "identification");
dispatch_post("/validation", "valider");
echo "fuck";
run();
?>
