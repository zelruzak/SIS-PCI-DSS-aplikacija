<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev7
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev7'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Ograničiti pristup kartičnim podacima po principu „onoliko koliko moraju znati“  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev7"/>
	<tr class="bold">
    	<td>7.1.</td>
        <td colspan="2">Primiti i ispitati pisanu policu o kontroli podataka te provjeriti dali polica podliježe sljedećim stavkama:</td>
    </tr>
    <tr>
        <td>7.1.1.</td>
        <td>Potvrdite da su prava pristupa za privilegirane korisničke ID-ove ograničena na minimalna dovoljna za uspješno obavljanje poslovnih obaveza</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>7.1.2.</td>
        <td>Potvrdite da su privilegije dodjeljene individualcima po osobinama i funkcijama posla koji obavljaju. (još zvano: „role-based acces control“ ili RBAC)</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>7.1.3.</td>
        <td>Potvrdite da je dokumentirano odobrenje od strane zadužene za specificiranje potrebnih privilegija neophodno za sve vrste pristupa, i da mora specificirati potrebne privilegije.</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>7.1.4.</td>
        <td>Potvrdite da je kontrola pristupa implementirana putem sustava za kontrolu pristupa</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>7.2.</td>
        <td colspan="2">Provjeriti postavke sustava i dokumentaciju trgovca kako bi verificirali da je sustav kontrole pristupa implementiran na sljedeći način:</td>
    </tr>
    <tr>
        <td>7.2.1. </td>
        <td>Potvrdite da je sustav kontrole pristupa određen za sve komponente sustava.</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>7.2.2. </td>
        <td>Potvrdite da je sustav kontrole pristupa konfiguriran tako da se primjenjuje pri dodjeli privilegija pristupa individualcima na temelju osobina i funkcija posla koji obavljaju.</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>7.2.3. </td>
        <td>Potvrdite da je sustav kontrole pristupa zadano postavljen na onemogući sve postavke.</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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