<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev5
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev5'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Koristiti i redovito ažurirati antivirusni softver ili programe  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev5"/>
    <tr>
        <td>5.1.</td>
        <td>Za dio sustavskih komponenti, koje uključuju sve vrste operacija na koje može utjecati maliciozni kod, potvrdite da je instaliran antivirusni softver</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>5.1.1.</td>
        <td>Potvrdite da svi antivirusni programi mogu otkriti, ukloniti i štititi od svih vrsta malicioznog softvera</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
	<tr class="bold">
    	<td>5.2.</td>
        <td colspan="2">Potvrditi da je sav antivirusni softver ažuriran, aktivan i da generira logove na slejdeći način:</td>
    </tr>
    <tr>
        <td>5.2.a. </td>
        <td>Potvrdite da ste ispitali politiku i potvrdili da ona zahtjeva ažuriranje antivirusnog softvera</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>5.2.b. </td>
        <td>Potvrdite da je prilikom isntalacije omogućeno automatsko ažuriranje i periodičko skeniranje</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>5.2.c </td>
        <td>Potvrdite da je za dio sustavskih komponenti na koje može utjecati maliciozni kod, omogućeno automatsko ažuriranje i periodičko skeniranje</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>5.2.d </td>
        <td>Potvrdite ste za dio sustavskih komponenti utvrdili da antivirusni softver radi logove i da su oni u skladu s zahtjevom 10.7. iz ove norme</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    
    <tr>
		<td colspan="3" align="center"><input class="submit" type="submit" name="ok" value="Pošalji"/></td>
	</tr>
</table>
</form>
    
</div>




<?php include_once("footer.php"); ?>

</div>
</body>
</html>