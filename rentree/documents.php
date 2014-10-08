<?php

  session_name("Rentree");
  @session_start();
  require_once("config.php");

  if( !isset($_SESSION['auth']) || ($_SESSION['auth'] != "TRUE" ) ) {
    // redirection
    header("location: index.php");
  }
  
  if ($_SESSION['existe'] == "TRUE") {
    include_once("includes/getData.php");
  }
  
  include_once("includes/header.php");
?>

<script type="text/javascript">
$(document).ready(function(){
<?php
  include_once("js/spinner.js"); 
  include_once("js/formData.js");
  include_once("js/selectPromo.js");
  include_once("js/fancybox.js");     
?>
});
</script>

<table width="100%" border="0" cellspacing="0" align="center">
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="0" align="center">
        <tr>
          <td colspan="3" height="30">&nbsp;</td>
        </tr>
        <tr>
          <td width="30%" align="left" valign="middle"><div align="left"><img src="images/logo_ISEN.png" width="270"></div></td>
          <td width="50%" valign="middle">
            <div class="titre" align="center">
              <?php echo $titre; ?>
            </div>            
          </td>
          <td width="30%" align="right" valign="middle"><div class="titreBis" align="right">Brest - Rennes</div></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0">
        <tr>
          <td colspan="2" height="30">&nbsp;<hr></td>
        </tr>       
        <tr>
          <td valign="top" width="40%">
            <?php include_once("includes/formData.php"); ?>
          </td>
          <td valign="top"> 
            <div id="intro" style="display:none;">
              <table width="100%" border="0" cellspacing="0" align="center">
                <tr><td style="height:70px">&nbsp;</td></tr>
                <tr><td style="height:100%"><img class="intro" src="images/isen.gif"></td></tr>
                <tr><td style="height:70px;vertical-align:bottom">&nbsp;</td></tr>
              </table>
            </div>
            <div id="docs" style="display:none;">
              <?php include_once("includes/listPromo.php"); ?>
              <div id="container" style="display:none;"></div>              
            </div>
            <?php
            if ($_SESSION['existe'] == "TRUE") {
              echo "<script type=\"text/javascript\">$(\"#docs\").show();</script>";        
            }
            else {
              echo "<script type=\"text/javascript\">$(\"#intro\").show();</script>";      
            }
            ?> 
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>



