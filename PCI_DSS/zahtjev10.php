<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev10
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev10'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Pratiti i snimati sav pristup mrežnim resursima i podacima vlasnika kartica  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev10"/>
    <tr>
        <td>10.1.</td>
        <td>Potvrdite da ste provjerili i promatrali te ispitali administratora sustava kako bi utvrdili da se prate svi pristupi sustavskim komponentama</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>10.2</td>
        <td colspan="2">Ispitivanjem, istraživanjem kontrolnih zapisnika i provjeravanjem kontrolnih postavki treba utvrditi sljedeće:</td>
    </tr>
    <tr>
        <td>10.2.1.</td>
        <td>Potvrdite da ste provjerili da su svi idividualni pristupi kartičnim podacima uvedeni u zapisnik.</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.2.</td>
        <td>Potvrdite da ste provjerili da su sve akcije koje su poduzete sa administratorskim privilegijama zapisane u zapisnik.</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.3.</td>
        <td>Potvrdite da ste provjerili da su evidentirani svi pristupi kontrolnim mjestima.</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.4.</td>
        <td>Potvrdite da ste provjerili da su evidentirani neuspješni pokušaji ostvarivanja pristupa.</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.5.</td>
        <td>Potvrdite da ste provjerili je li su u upotrebi mehanizmi identifikacije i autentikacije.</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.6.</td>
        <td>Potvrdite da ste provjerili je li se evidentiraju inicijalizacije kontrolnih zapisa.</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.2.7.</td>
        <td>Potvrdite da ste provjerili je li se evidentiraju kreiranja i brisanja objekata sustavskih razina</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>10.3.</td>
        <td colspan="2">Kroz ispitivanje i promatranje za sve događaje počevši od događaja 10.2 učiniti sljedeće:</td>
    </tr>
    <tr>
        <td>10.3.1.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže identifikaciju korisnika </td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.3.2.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže tip događaja</td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.3.3.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže datum i vrijeme</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.3.4.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže dali je indikacija bila uspješna ili neuspješna</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.3.5.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže porijeko događaja</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.3.6.</td>
        <td>Potvrdite da ste provjerili da ulazni zapisi sadrže identitet ili ime podatka, sustavske komponente ili resusrsa na koje se pokušalo utjecati.</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.a.</td>
        <td>Potvrdite da ste provjerili je li je tehnologija vremenske sinkronizacije implementirana te odgovara PCI DSS zahtjevima 6.1 i 6.2.</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.b.</td>
        <td>Potvrdite da ste postigli i pregledali procese za postizanje, distribuciju i spremanje točnog vremena unutar organizacije. </td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.1.a.</td>
        <td>Potvrdite da ste provjerili da samo centralni vremenski serveri primaju vremenske signale iz vanjskog izvora, a vremenski signali moraju biti bazirani na International Atomic vremenu ili UTC-u.</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.1.b.</td>
        <td>Potvrdite da ste provjerilida se centralni procesori međusobno usklađuju kako bi održali točno vrijeme, te da drugi interni serveri primaju informacije o vremenu samo od centralnog servera za vrijeme. </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.2.a.</td>
        <td>Potvrdite da ste pregledali konfiguraciju sustava i postavke sinkronizacije vremena kako bi verificirali da pristup vremenskim podacima ima samo osoblje čiji poslovi zahtjevaju takav pristup. </td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.2.b.</td>
        <td>Potvrdite da ste pregledali konfiguraciju sustava i postavke sinkronizacije vremena i procesa kako bi verificirali da se bilo kakva promjena vremenskih postavki na kritičnim sustavima bude zabilježena i promatrana. </td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.4.3.</td>
        <td>Potvrdite da ste provjerili da vremenski serveri prihvaćaju ažuriranje vremena od strane vanjskih prihvačenih izvora kako bi spriječili moguću pojavu mjenjanja vremena od strane individualaca. Opcionalno, takva ažuriranja mogu biti kriptirana simetričnim ključem ili nekom drugom metodom kako bi spriječili neautoriziranu promjenu sadržaja.</td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>10.5.</td>
        <td colspan="2">Ispitati sustavskog administratora te provjeriti dozvole kako bi verificirali da su kontrolni zapisi osigurani od mjenjanja na sljedeće načine:</td>
    </tr>
    <tr>
        <td>10.5.1.</td>
        <td>Potvrdite da ste provjerili da samo individualci čiji posao to zahtjeva mogu vidjeti kontrolne zapise.</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.5.2.</td>
        <td>Potvrdite da ste provjerili da su kontrolni zapisi zaštićeni od neautoriziranih modifikacija pomoću mehanizma za kontrolu pristupa, fizičkog izdvajanja i/ili mrežnog odvajanja.</td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.5.3.</td>
        <td>Potvrdite da ste provjerili da se redovito radi sigurnosna kopija na centralni server za zapise ili neki drugi medij koji je teško izmjeniti.</td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.5.4.</td>
        <td>Potvrdite da ste provjerili da su zapisi o vanjskim tehnologijama kopirani ili premješteni na osigurani centralni server za zapise ili medij.</td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.5.5.</td>
        <td>Potvrdite da ste provjerili je li se koristi nadziranje integriteta podataka ili detekcija promjene podataka tako što treba ispitati postavke sustavka i nadgledanih datoteka te rezultate o aktivnostima dobivene nadziranjem.</td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.6.a.</td>
        <td>Potvrdite da ste provjerili li sigurnosna politika i procedure uključuju procedure za pregled sigurnosnih zapisa barem jednom dnevno te da se zahtjeva i praćenje iznimki.</td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.6.b.</td>
        <td>Potvrdite da ste kroz provjere i preglede utvrdili da se regularno pregledavaju zapisi za sve komponente sustava. </td>
        <td class="treca"> <input type="radio" name="stavka28" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka28" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.7.a.</td>
        <td>Potvrdite da ste ispitali je li sigurnosna politika i procedure uključuju politiku zadržavanja koja zahtjeva zadržavanje kontrolnih zapisa barem godinu dana. </td>
        <td class="treca"> <input type="radio" name="stavka29" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka29" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>10.7.b.</td>
        <td>Potvrdite da su kontrolni zapisi dostupni unutar godinu dana te da se procesi od najmanje zadnjih 3 mjeseca mogu odmah povratiti u svrhu analiziranja.</td>
        <td class="treca"> <input type="radio" name="stavka30" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka30" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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