<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev1
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev1'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Instalirati i održavati firewall da bi se zaštitili podaci vlasnika kartica </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev1"/>
	<tr class="bold">
    	<td>1.1.</td>
        <td colspan="2">Koristiti i provjeravati konfiguraciju firewalla i rutera i drugu dokumentaciju, navedenu u nastavku:</td>
    </tr>
    <tr>
        <td>1.1.1.</td>
        <td>Potvrdite da postoji formalni proces za testiranje i održavanje svih mrežnih veza i promjena na firewallu i ruteru</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.2.a.</td>
        <td>Potvrdite da mrežni dijagram postoji i da dokumentira sve veze prema vlasnicima kartica, uključujući bežične veze</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.2.b.</td>
        <td>Potvrdite da je dijagram ažuran</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.3.a.</td>
        <td>Potvrdite da konfiguracija firewalla uključuje zahtjeve za vezu prema Internetu i između DMZ-a i interne mreže</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?> /> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.3.b.</td>
        <td>Potvrdite da je postojeći mrežni dijagram konzistentan sa standardima konfiguriranja firewalla</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.4.</td>
        <td>Potvrdite da konfiguracija firewalla i rutera uključuju opis grupa, uloga i odgovornosti za logičko upravljanje mrežnim komponentama</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.5.a.</td>
        <td>Potvrdite da standardi konfiguriranja firewalla i rutera obuhvaćaju listu servisa, protokola i portova potrebnih za rad npr. HTTP, SSL, SSH, VPN…</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.5.b.</td>
        <td>Identificirali ste nezaštićene servise, protokole i portove i potvrdili da su nužni za poslovanje</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.6.a.</td>
        <td>Potvrdite da kofiguracija firewalla i rutera zahtjeva pregled pravila firewalla i rutera najmanje svakih šest mjeseci</td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.1.6.b.</td>
        <td>Pregledali ste i ispitali dokumentaciju da bi se potvrdilo da su pravila pregledana svakih šest mjeseci</td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>1.2.</td>
        <td colspan="2">Provjeriti konfiguraciju firewalla i rutera da bi se potvrdilo da su veze između nesigurnih mreža i sustavskih komponenata ograničene prema sljedećim procedurama:</td>
    </tr>
    <tr>
        <td>1.2.1.a.</td>
        <td>Potvrdite da je dolazni i odlazni promet ograničen samo na ono što je nužno za vlasnika kartice i da su ograničenja dokumentirana</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.2.1.b.</td>
        <td>Potvrdite da je sav dolazni i odlazni promet zabranjen, npr. korištenjem forme „zabrani sve“ ili posebna zabrana pojedincu</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.2.2.</td>
        <td>Potvrdite da su konfiguracijske datoteke rutera sigurne i sinkronizirane (npr. u stanju dok radi u stanju dok se uključuje)</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.2.3.</td>
        <td>Potvrdite da postoje firewalli instalirani između bežičnih mreža i sustava za pohranu podataka vlasnika kartice i da oni zabranjuju ili kontroliraju promet iz bežične okoline u okolinu s podacima o karticama</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>1.3.</td>
        <td colspan="2">Ispitati konfiguraciju rutera i firewalla uključujući DMZ i sve druge vrste rutera da se odradi postoji li izravan pristup između Interneta i sustavskih komponenti u internoj mreži:</td>
    </tr>
    <tr>
        <td>1.3.1.</td>
        <td>Potvrdite da je implementirana demilitarizirana zona i da ograničava promet sustavskim komponenatama koje koriste autorzirane javno dostupne servise, protokole i portove</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.2.</td>
        <td>Potvrdite da je dolazni Internet promet ograničen na IP adrese unutar DMZ</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.3.</td>
        <td>Potvrdite da nisu dopuštene nikakve izravne veze između Interneta i okoline s podacima o karticama</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.4.</td>
        <td>Potvrdite da interne adrese ne mogu proći iz Interneta u DMZ </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.5.</td>
        <td>Potvrdite da je sav promet iz okoline s podacima o karticama prema Internetu autoriziran</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.6.</td>
        <td>Potvrdite da firewal ima pametnu kontrolu (dinamičko filtiranje paketa)</td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.7.</td>
        <td>Potvrdite da su sustavske komponente, koje pohranjuju podatke o karticama (kao što je baza podataka) u internu mrežu, odvojene od DMZ i drugih nepouzdanih mreža </td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.8.</td>
        <td>Potvrdite da postoje metode za skrivanje privatnih IP adresa i informacija o rutiranju iz interne mreže prema Internetu</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.3.8.a.</td>
        <td>Potvrdite da je skrivanje privatnih IP adresa i informacija o rutiranju prema van autorizirano</td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.4.a.</td>
        <td>Potvrdite da mobilna računala i računala zaposlenika s izravnim pristupm Internetu, koja pristupaju organizacijskoj mreži imaju aktivan i instaliran firewall</td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>1.4.b.</td>
        <td>Potvrdite da je zaposlenikov osobni firewall konfiguriran prema standardima zadanim u organizaciji i da je isti kod svih zaposlenika ili mobilnih računala</td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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