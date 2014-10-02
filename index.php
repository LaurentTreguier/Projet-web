<?php
require_once("../limonade-master/lib/limonade.php");
require_once("controleur.php");


dispatch("/", "identification");


run();
?>