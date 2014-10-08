
<table width="90%"  border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="2" class="notice">     
      <div class="texte">
        <p>Vous trouverez sur cette page toutes les informations utiles pour la <b>rentrée <?php echo $annee; ?></b> en sélectionnant l'année qui vous concerne.
         Vous pouvez télécharger chaque fichier (format <a href="http://get.adobe.com/fr/reader/" target="_blank">PDF</a>)
         ou bien l'ensemble des fichiers (format <a href="http://www.7-zip.org/" target="_blank">ZIP</a>) pour l'année choisie. <i>A imprimer avec modération...</i></p>
      </div>
    </td>
  <tr>

  <tr>
    <td width="10%" class="cellPromo">&nbsp;</td>  
    <td class="cellPromo">
      <div align="left" class="messageTabDoc">
        Choisissez votre année&nbsp;:&nbsp;
        <?php
          echo "<select id=\"selectPromo\" size=\"1\">";
          echo "<option value=\"NULL\">"."Choisir dans la liste"."</option>";			
          foreach($libellePromo as $key => $value) {
            echo "<option value=\"".$value."\">".$key."</option>";
          }
          echo "</select>";
        ?>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="cellPromo">&nbsp;</td>
  </tr>        
</table>
