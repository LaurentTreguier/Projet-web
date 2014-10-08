
	<form id="formData" class="validate" method="post">
        <table width="90%" border="0" align="center" cellspacing="0">        
          <tr>
    		    <td class="cellOne" colspan="2" width="50%">
        <?php
        if ($_SESSION['existe'] != "TRUE") {
          echo "<br /><div id=\"message\" class=\"monMessage\" align=\"center\">";
          echo "Nous vous remercions de bien vouloir compléter ce formulaire<br />avant d'accéder aux documents de rentrée.";
          echo "</div><br />";        
        }
        else {
          echo "<br /><div id=\"message\" class=\"monMessage\" align=\"center\">";
          echo "Vous pouvez modifier les données enregistrées...<br /><br />";
          echo "</div><br />";         
        }
        ?>    
            </td>
          </tr>
          <tr>
            <td width="35%" class="cellOne"><div class="texte" align="right">Identifiant&nbsp;:&nbsp;</div></td>
            <td class="cellOne"><div class="texte" align="left"><?php echo $_SESSION['courriel']; ?></div></td>
          </tr>          
          <tr>
            <td colspan="2" class="cellOne"><div align="left" class="monLabel">&nbsp;&nbsp;&nbsp;<u>Etudiant(e)</u></div></td>
          </tr>
          <tr>
            <td width="35%" class="cellOne"><div align="right" class="texte">Nom de l'étudiant(e)&nbsp;:&nbsp;</div></td>
            <td class="cellOne"><input name="nomFils" type="text" size="30" value="<?php echo $nomFils; ?>"></td>
          </tr>
          <tr><td class="cellOne" colspan="2" align="center"><div id="nomFils"></div></td></tr>
          <tr>
            <td width="35%" class="cellOne"><div align="right" class="texte">Prénom de l'étudiant(e)&nbsp;:&nbsp;</div></td>
            <td class="cellOne"><input name="prenomFils" type="text" size="30" value="<?php echo $prenomFils; ?>"></td>
          </tr>
          <tr><td class="cellOne" colspan="2" align="center"><div id="prenomFils"></div></td></tr>          
          <tr>
            <td width="35%" class="cellOne"><div align="right" class="texte">Date de naissance&nbsp;:&nbsp;</font></div></td>
            <td class="cellOne"><input name="ddn" type="text" size="30" value="<?php echo $ddn; ?>"></td>
          </tr>
          <tr><td class="cellOne" colspan="2" align="center"><div id="ddn"></div></td></tr>            
          <tr>
            <td colspan="2" class="cellOne">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="cellTwo">&nbsp;</td>
          </tr>                    
          <tr>
            <td colspan="2" class="cellTwo"><div align="left" class="monLabel">&nbsp;&nbsp;&nbsp;<u>Parents</u></div></td>
          </tr>
          <tr>
            <td width="35%" class="cellTwo"><div align="right"class="texte" >Téléphone mobile&nbsp;:&nbsp;</div></td>
            <td class="cellTwo"><input name="telMobile" type="text" value="<?php echo $telMobile; ?>" size="30"></td>
          </tr>
          <tr><td class="cellTwo" colspan="2" align="center"><div id="telMobile"></div></td></tr>            
          <tr>
            <td width="35%" class="cellTwo"><div align="right" class="texte">Courriel&nbsp;:&nbsp;</div></td>
            <td class="cellTwo"><input name="courriel" type="text" value="<?php echo $courriel; ?>" size="30"></td>
          </tr>
           <tr><td class="cellTwo" colspan="2" align="center"><div id="courriel"></div></td></tr>          
          <tr>
            <td colspan="2" class="cellTwo">&nbsp;</td>
          </tr>            
          <tr>
            <td align="left" height="30" class="cellTwo">&nbsp;&nbsp;&nbsp;<input class="button" name="quit" type="button" id="quit" value="Quitter"></td>
            <td align="right" height="30" class="cellTwo"><input class="button" name="submitData" type="submit" id="submitData" value="Enregistrer">&nbsp;&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="notice">     
              <br />Conformément à la loi "Informatique et Libertés" (loi du 6 janvier 1978 telle que modifiée), 
              vous bénéficiez d'un droit d'accès, de rectification et de suppression des données personnelles vous concernant, 
              que vous pouvez exercer en vous adressant à l'adresse e-mail mentionnée ci-dessous. 
            </td>
          <tr>
            <td colspan="2" class="cellBody"><?php include_once("footer.php"); ?></td>
          </tr>          
        </table>
      </form>
