<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev2
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev2'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Ne koristiti zadane sustavske lozinke i druge sigurnosne parametre  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev2"/>
	<tr class="bold">
    	<td>2.1.</td>
        <td colspan="2">odabrati dio sustavskih komponenti i pokušati se prijaviti na uređaje, koje koriste zadane sustavske lozinke i korisničke račune da bi se potvrdilo da su ti zadani parametri promijenjeni:</td>
    </tr>
    <tr>
        <td>2.1.1.a.</td>
        <td>Potvrdite da su promijenjeni zadani kriptografski ključevi od prve instalacije i svaki put kada je netko napustio tvrtku ili promijenio poziciju</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.1.1.b.</td>
        <td>Potvrdite da su promijenjeni SNMP stringovi na bežičnom uređajima</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.1.1.c.</td>
        <td>Potvrdite da su promijenjene zadane lozinke na access pointu</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.1.1.d.</td>
        <td>Potvrdite da je ugrađeni softver na bežičnim uređajima ažuriran i podržava jaku enkripciju</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?> /> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.1.1.e.</td>
        <td>Potvrdite da su svi drugi zadani sigurnosni parametri izmijenjeni</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.a.</td>
        <td>Ispitali ste organizacijske standarde kofiguriranja za sve vrste sustavskih komponenti i potvrdili da su oni konzistentni s prihavaćenim industrijskim standardima</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.b.</td>
        <td>Potvrdite da su standardi konfiguriranja sustava ažurirani</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.c.</td>
        <td>Potvrdite da su standardi konfiguriranja sustava primijenjeni kada je konfiguriran novi sustav</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.1.a.</td>
        <td>Za uzorak sustavskih komponenti ste potvrdili da je na svakom serveru implementirana samo jedna funkcija</td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.1.b</td>
        <td>Potvrdite da je najviše jedna primarna funkcija implementirana na komponenti virtualnog sustava</td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.2.a.</td>
        <td>Za uzorak sustavske komponente ste ispitali koji su servisi i protokoli omogućeni. Potvrdite da su uključeni samo nužni protokoli i servisi.</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.2.b.</td>
        <td>Identificirali ste da li je omogućen rad neisigurnim servisima i protokolima. Potvrdite da su oni prilagođeni i da su njihove sigurnosne značajke dokumentirane.</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.3.a.</td>
        <td>Intervjuirali ste sistem administratore i security menadžere da bi se potvrdilo da li imaju znanje o sigurnosti sustava</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.3.b.</td>
        <td>Potvrdite da su česti sigurnosni parametri uključeni u standarde sustava konfiguriranja</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.3.c.</td>
        <td>Za skup sustavskih komponenti potvrdite da su česti sigurnosni parametri ispravno postavljeni</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.4.a.</td>
        <td>Za dio sustavskih komponenti potvrdite da su uklonjene nepotrebne funkcionalnosti</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.4.b.</td>
        <td>Potvrdite da su uključene funkcije dokumentirane i da podupiru sigurnu kofiguraciju</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.2.4.c.</td>
        <td>Potvrdite da su samo dokumentirane funkcionalnosti prisutne na uzorku sustavskih komponenti koje su testirane </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>2.3.</td>
        <td colspan="2">Za dio sustavskih komponenti potvrditi da je administrativni pristup, koji nije s konzole, kriptiran na način:</td>
    </tr>
    <tr>
        <td>2.3.a.</td>
        <td>Promatrali ste administratorovu prijavu na sustav da bi se potvrdilo da se koriste jake enkripcijske metode prije nego što se traži upis administratorske lozinke</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.3.b.</td>
        <td>Pregledali ste servise i datoteke s parametrima na sustavu da bi se odredilo da Telnet ili drugi način rada na daljinu nije dostupan za rad unutar sustava</td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.3.c.</td>
        <td> Potvrdite da je administratorski pristup web baziranim upravljačkim sučeljima kriptiran</td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>2.4.</td>
        <td>Proveli ste procedure za testiranje iz dokumenta Additional PCI DSS Requirements for Shared Hosting Providers dostupnom na stranicama PCI Security Standards Council-a</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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