<?php

  session_name("Rentree");
  @session_start();
  session_unset();
  
  // redirection
  header("location: ../index.php");

?>
