<?php
  session_name("Rentree");
  @session_start();

  require_once("../config.php");
  
  if( !isset($_SESSION['auth']) || ($_SESSION['auth'] != "TRUE" ) ) {
    // redirection
    header("location: ../index.php");
  }

  if(isset($_GET['promo'])) {
    
    $promo = $_GET['promo'];
    $countFiles = 0;
    $html = "<table width=\"90%\"  border=\"0\" align=\"center\" cellspacing=\"0\">";    
    
    if ($promo!="NULL") {   
      
      $promo = $_GET['promo'];
      $key = array_search($promo, $libellePromo);
      $DbLink = mysql_connect($DbHost, $DbUser, $DbPassword) or die('erreur de connexion au serveur');
      mysql_select_db($DbName) or die('erreur de connexion a la base de donnees');
      mysql_query("SET NAMES 'utf8'");
      
      $query = "SELECT count(id) FROM document WHERE promo='".$promo."' OR promo=''";
      $result = mysql_query($query);
      $data = mysql_fetch_array($result);
      $html .= "<td colspan=\"2\" class=\"cellDoc\"><div class=\"titreTabDoc\" align=\"left\">Ci-dessous, les ".$data[0]." documents disponibles...</div></td>";    
      $html .= "<td class=\"cellDoc\"><div class=\"titreTabDoc\" align=\"center\">Fichiers</div></td></tr>";                
      
      // les documents de la promo demandée
      $query = "SELECT * FROM document WHERE promo='".$promo."' ORDER BY rang";
      $result = mysql_query($query); 
      while ($data = mysql_fetch_array($result)) {
        $listFiles[$countFiles] = $data['fichier'];
        $countFiles++;
        $html .= "<td width=\"5%\"class=\"cellTwo\"><div class=\"texte\" align=\"right\">".$countFiles.".&nbsp;&nbsp;</div></td>";        
        $html .= "<td width=\"80%\" class=\"cellTwo\"><div class=\"texte\" align=\"left\">".$data['libelle']."</div></td>";    
        $html .= "<td class=\"cellTwo\"><div align=\"center\"><a id=\"iframe\" href=\"pdf/".$data['fichier']."\"><img title=\"".$data['libelle']."\" width=\"20px\" border=\"0\" src=\"images/pdf.png\"></a></div></td></tr>";   
      }

      
      // Les documents communs
      $query = "SELECT * FROM document WHERE promo='' ORDER BY rang";
      $result = mysql_query($query); 
      while ($data = mysql_fetch_array($result)) {
        $listFiles[$countFiles] = $data['fichier'];
        $countFiles++;
        $html .= "<td width=\"5%\"class=\"cellOne\"><div class=\"texte\" align=\"right\">".$countFiles.".&nbsp;&nbsp;</div></td>";        
        $html .= "<td width=\"80%\" class=\"cellOne\"><div class=\"texte\" align=\"left\">".$data['libelle']."</div></td>";    
        $html .= "<td class=\"cellOne\"><div align=\"center\"><a id=\"iframe\" href=\"pdf/".$data['fichier']."\"><img title=\"".$data['libelle']."\" width=\"18px\" border=\"0\" src=\"images/pdf.png\"></a></div></td></tr>";   
      }
      
      
      
      // création du fichier zip
      // penser à effacer périodiquement les fichiers générés
      require_once("../pclzip/pclzip.lib.php");
      $fileName = $promo."-".texteAleatoire(12).".zip";
      $archive = new PclZip("../zip/".$fileName);
      $archive->create("../pdf/".$listFiles[0], PCLZIP_OPT_REMOVE_ALL_PATH);
      for ($i = 1; $i < $countFiles; $i++) {
        $v_list = $archive->add("../pdf/".$listFiles[$i], PCLZIP_OPT_REMOVE_ALL_PATH);
        if ($v_list == 0) {
          die("Error : ".$archive->errorInfo(true));
        }
      }
      $html .= "<tr><td colspan=\"3\" class=\"cellDoc\">&nbsp;</td></tr>";
      $html .= "<tr><td colspan=\"2\" class=\"cellDoc\"><div class=\"messageTabDoc\" align=\"right\">".$key."<br />Télécharger tous les fichiers&nbsp;</div>";
      $html .= "<td class=\"cellDoc\" align=\"left\"><a href=\"zip/".$fileName."\"><img title=\"".$fileName."\" width=\"36px\" border=\"0\" src=\"images/zip.png\"></a></td></tr>";
      $html .= "<tr><td colspan=\"3\" class=\"cellDoc\"><hr></td></tr>";
    }
    $html .= "</table>";
    $message = array('status' => 200, 'message' => $html);    
  }
  else {
    $message = array('status' => 400, 'message' => "Promotion non définie !");
  }
  echo json_encode($message);
  
?>
