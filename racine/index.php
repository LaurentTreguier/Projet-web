<?php
  session_name("Rentree");
  session_start();
  require_once("config.php");
  
  include_once("includes/header.php");
  
?>

<script type="text/javascript">
$(document).ready(function(){
<?php
  include_once("js/spinner.js"); 
  include_once("js/formLogin.js"); 
?>
});
</script>

<div class="titre" align="center">
      <br /><br /><img src="images/logo_ISEN.png" width="270">
      <br /><br /><?php echo $titre." ".$annee; ?><br /><br /><br /><br />
</div>

<div align="center">
  <form id="formLogin" class="validate" method="post">
    <table border="0" cellspacing="2" width="50%">
      <tr> 
        <td width="30%" align="right"> 
          <div class="monLabel" align="right">Courriel :&nbsp;</div>
        </td>
        <td align="left" width="70%"> 
          <div align="left"><input type="text"  name="courriel" size="30"></div>
        </td>
      </tr>
      <tr><td colspan="2" align="center"><div id="courriel"></div></td></tr>
      <tr> 
        <td width="30%">&nbsp;</td>
        <td align="left" width="70%" > 
          <div class="texte" align="left">(Cette adresse électronique sera votre identifiant)</div>
        </td>
      </tr>
      <tr> 
        <td width="30%" align="right"> 
          <div class="monLabel" align="right">Mot de passe :&nbsp;</div>
        </td>
        <td align="left" width="70%" > 
          <div align="left"><input type="password" name="password" size="30"></div>
        </td>
      </tr>
      <tr><td colspan="2" align="center"><div id="password"></div></td></tr>
      <tr> 
        <td width="30%">&nbsp;</td>
        <td align="left" width="70%" > 
          <div class="texte" align="left">(Le mot de passe qui vous a été envoyé par courrier)</div>
        </td>
      </tr>
      <tr> 
        <td colspan="2" align="center" > 
          <br />
          <div align="center"><input type="submit" class="button" name="submitLogin" id="submitLogin" value="  Valider  "></div>
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include_once("includes/footer.php"); ?>
</body>
</html>