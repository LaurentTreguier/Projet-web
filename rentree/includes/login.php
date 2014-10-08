<?php

  session_name("Rentree");
  @session_start();

  require_once('../config.php');
  $_SESSION['existe'] = "FALSE";
  $_SESSION['auth'] = "FALSE";  
  
  if (!empty($_POST)) {
    $_SESSION['courriel'] = chop($_POST['courriel']);
    $password = chop($_POST['password']);

    if ($password != $cle) {
      // password ok ?
      $message = array('status' => 400, 'message' => "Le mot de passe n'est pas valide !");   
    }
    else if (dejaInscrit($_SESSION['courriel'])){
      // deja inscrit ?
      $_SESSION['auth'] = "TRUE";
      $_SESSION['existe'] = "TRUE";      
      $message = array('status' => 200, 'message' => "OK"); 
    }
    else {
      $checkMail = mailCheck($_SESSION['courriel']);
      if ($checkMail!="OK") {
        $message = array('status' => 400, 'message' => $checkMail);    
      }
      else {
        $_SESSION['auth'] = "TRUE";
        $message = array('status' => 200, 'message' => "OK");     
      }
    }
    echo json_encode($message); 
  }

?>
