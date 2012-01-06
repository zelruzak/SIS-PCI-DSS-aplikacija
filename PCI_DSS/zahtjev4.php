<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev4
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev4'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Kriptirati transmisiju podataka o karticama kroz javne mreže  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev4"/>
	<tr class="bold">
    	<td>4.1.</td>
        <td colspan="2">potvrditi da se koriste sigurnosni protokoli svaki put kada se prenose podaci o vlasniku kartice preko javne mreže. Potvrditi da se koristi jaka kriptografija tijekom prijenosa na sljedeći način:</td>
    </tr>
    <tr>
        <td>4.1.a.</td>
        <td>Potvrdite da ste odabrali uzorak transakcija, pratili ih i utvrdili da su podaci o vlasniku kartice kriptirani tijekom prijenosa</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.1.b.</td>
        <td>Potvrdite da su korišteni samo povjerljivi ključevi i certifikati</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.1.c.</td>
        <td>Potvrdite da je protokol implementiran tako da koristi samo sigurne konfiguracije i ne podržava nesigurne verzije konfiguracija</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.1.d.</td>
        <td>Potvrdite da je korištena ispravna jačina enkripcije u skladu s metodom enkripcije</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.1.e.</td>
        <td>Potvrdite da je HTTPS pojavljuje kao dio URL u pregledniku; potvrdite da ne traže nikakve podaci o vlasniku kartice dok nema HTTPS u URL-u</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.1.1.</td>
        <td>Za bežične mreže, kroz koje se prenose podaci o vlasniku kartice ili koje su spojene na okolinu vlasnika kartice, potvrdite da koriste najbolje industrijske standarde i da implementiraju jaku nekripciju za autentifikaciju i transmisiju </td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.2.a.</td>
        <td>Potvrdite da su PAN informacije ili nečitke ili osigurane jakim kriptografskim tehnikama kada se šalju preko tehnologija za komuniciranje na strani krajnjeg korisnika</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>4.2.b.</td>
        <td>Potvrdite da postoji politika kojom se utvrđuje da ne šalju PAN informacije preko tehnologija za komuniciranje na strani krajnjeg korisnika</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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