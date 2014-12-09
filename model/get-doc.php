<?php

$selection = $_GET['select'];


//Chercher les fichiers correspondents à la selection sur le serveeur.
$string = "
<a href='pdf/datesRentreesISENBrestRennes1213.pdf' type='pdf'>Dates des rentrées à l'ISEN-Brest/Rennes</a></br>
<a href='pdf/secuModeEmploi1213.pdf' type='pdf'>Sécurité Sociale étudiante mode d'emploi </a></br>
<a href='pdf/LMDErentree2012.pdf' type='pdf'>LMDE </a></br>
<a href='pdf/SMEBArentree2012.pdf' type='pdf'>SMEBA </a></br>
<a href='pdf/livretAccueilBDE.pdf' type='pdf'>Isenien : mode d’emploi ! </a></br>
<a href='pdfBNPOffreRentree2012.pdf' type='pdf'>Offre banque BNP </a></br>
<a href='pdf/CMBOffreRentree2012.pdf' type='pdf'>LMDE </a></br>
<a href='pdf/Offre banque CMB' type='pdf'>LMDE </a></br>
";

echo $string;
?>