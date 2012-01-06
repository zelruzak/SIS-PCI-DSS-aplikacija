<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev8
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev8'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Dodjela jedinstvenog ID-a svakoj osobi koja ima pristup računalu   </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev8"/>
    <tr>
        <td>8.1.</td>
        <td>Potvrdite da svi korisnici imaju dodjeljen jedinstven identifikator (ID) kako bi pristupili sustavskim komponentama i kartičnim podacima.</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.2.</td>
        <td>Potvrdite da su korisnici identificirani putem jedinstvenog identifikatora (ID) i dodatne autorizacije npr. lozinka, za pristup okolini kartičnih podataka provedeni na sljedeći način:
        <ul>
        <li>Usvojiti ispitati dokumentaciju koja opisuje metode korištene za autorizaciju.</li>
        <li>Za svaku metodu autentikacije i za svaku komponentu sustava podržavati autentikaciju kako bi provjerili dali je  autentikacija funkcijski konzistentna sa metodoma autentikacije koja je navedena u dokumentaciji. </li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.3.</td>
        <td>Potvrdite da se prilikom autentikacije mora koristiti sa dvije različite metode autentikacije.</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.4.a. </td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti ispitati datoteke koje sadrže lozinke kako bi se verificirala ne čitljivost lozinki tijekom prijenosa i pohrane.</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.4.b. </td>
        <td>Potvrdite da ste samo za davatelje usluga provjeravali datoteke sa lozinkama kako bi se provjerilo dali su korisničke lozinke kriptirane.</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
	<tr class="bold">
    	<td>8.5.</td>
        <td colspan="2">Pregledati procedure i ispitati osoblje kako bi verificirali da su implementirane procedure za korisničku identifikaciju i autentikacijski menadžment na sljedeći način:</td>
    </tr>
    <tr>
        <td>8.5.1.</td>
        <td>Potvrdite da ste odabrali uzorak korisničkih identifikatora (ID) tako da uzorak uključuje i administratore i „obične“ korisnike te provjerili da je svaki korisnik ovlašten koristiti sustav prema politici koja podliježe sljedećem:
        <ul>
        <li>primiti i provjeriti autorizacijsku formu za svaki jedinstveni identifikator (ID)</li>
        <li>provjeriti dali su identifikatori (ID) iz uzorka implementirani po uzoru na autorizacijsku formu. Praćenjem informacija iz autorizacijske forme sve do sustava. </li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.2.</td>
        <td>Potvrdite da ste provjerili procedure autentikacije/lozinki te dodijelili osoblje koje će kontrolirati i provjeravati korisnikov identitet ukoliko korisnički zahtjev za promjenom lozinke dođe putem telefona, e-maila,web-a ili neke druge metode koja ne uključuje korisnikovu osobnu pojavu.</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.3.</td>
        <td>Potvrdite da ste provjerili procedure lozinke te zadužili sigurnosno osoblje koje će provjeravati jednokratne lozinke za nove korisnike te vršiti izmjenu i resetiranje lozinki za postojeće korisnike da bi svi korisnici imali jedinstvene lozinke i da budu promjenjene nakon prvog korištenja.</td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.4.</td>
        <td>Potvrdite da ste odabrali uzorak korisnika koji su terminirani u posljednjih 6 mjeseci te pregledali trenutnu listu korisnika kako bi utvrdili dali su njihovi identifikatori obrisani ili deaktivirani. </td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.5.</td>
        <td>Potvrdite da ste provjerili da svi korisnički računi koji su neaktivni više od 90 dana budu izbrisani ili deaktivirani. </td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.6.</td>
        <td>Potvrdite da ste provjerili da korisničkim računima koji su dodjeljeni trgovcima bude onemogućen pristup, podrška i pružanje komponenti sustava te da im se to omogući samo onda kada se stvori potreba od strane trgovca.</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.7.</td>
        <td>Potvrdite da ste ispitali određen uzorak korisnika koji imaju jedinstveni identifikator (ID) kako bi se utvrdilo da su upoznati sa procedurama autentikacije i politike.</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.8.a.</td>
        <td>Potvrdite da ste na uzorku komponenti sustava ispitali listu korisničkih jedinstvenih identifikatora (ID) da bi utvrdili sljedeće:
        <ul>
        <li>generički korisnički identifikatori i korisnički računi su deaktivirani ili obrisani</li>
        <li>grupni identifikatori za aktivnosti sustavskog administriranja i ostalih kritičnih funkcija ne postoje.</li>
        <li>grupni i generički korisnički identifikatori se ne koriste za administriranje sustavskih komponenti.</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.8.b.</td>
        <td>Potvrdite da ste provjerili politiku i procedure autentikacije kako bi provjerili da su grupa i dijeljene lozinke ili druge autentikacijske metode izričito zabranjene.</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.8.c.</td>
        <td>Potvrdite da ste ispitali sustavskog administratora kako bi utvrdili da grupa i dijeljene lozinke ili druge autentikacijske metode ne budu distribuirane čak i ako su zatražene.</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.9.a.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da se zahtjeva promjena lozinke svakih 90 dana.</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.9.b.</td>
        <td>Potvrdite da ste, ako ste pružatelj usluga, pregledali interne procese i korisničku dokumentaciju kako bi verificirali da se lozinke moraju mijenjati periodično te da su korisnicima dane upute kada i kako te pod kojim okolnostima lozinke treba mijenjati.</td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.10.a.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da se zahtjeva minimalno 7 znakova za duljinu lozinke.</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.10.b.</td>
        <td>Potvrdite da ste, ako ste pružatelj usluga, pregledali interne procese i dokumentaciju kako bi verificirali da lozinke podliježu zahtjevu o minimalnom broju znakova.</td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.11.a.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da se zahtjeva da lozinka sadrži slova i brojke.</td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.11.b.</td>
        <td>Potvrdite da ste, ako ste pružatelj usluga, pregledali interne procese i dokumentaciju kako bi verificirali da lozinke podliježu zahtjevu o sadržavanju slova i brojki.</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.12.a.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da se zahtjeva da se prilikom izmjene lozinke ne može postaviti jedna od zadnje 4 lozinke koje je korisnik koristio ranije.</td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.12.b.</td>
        <td>Potvrdite da ste, ako ste pružatelj usluga, pregledali interne procese i dokumentaciju kako bi verificirali da lozinke podliježu zahtjevu da se prilikom izmjene lozinke ne može postaviti jedna od zadnje 4 lozinke koje je korisnik koristio ranije.</td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.13.a.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da se nakon 6 uzastopnih ne uspjelih pokušaja ostvarivanja pristupa korisnički račun blokira.</td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.13.b.</td>
        <td>Potvrdite da ste, ako ste pružatelj usluga, pregledali interne procese i dokumentaciju kako bi verificirali da lozinke podliježu zahtjevu da se nakon 6 uzastopnih ne uspjelih pokušaja ostvarivanja pristupa korisnički račun blokira.</td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.14.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti provjerili konfiguraciju sustavskih postavki kako bi verificirali da nakon blokiranja korisničkor računa on ostaje blokiran minimalno 30 minuta ili dok sustavski administrator ne omogući korištenje korisničkog računa.</td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.15.</td>
        <td>Potvrdite da ste na uzorku sustavskih komponenti treba provjeriti konfiguraciju sustavskih postavki kako bi verificirali da je neaktivno vrijeme sesije postavljano na 15 minuta ili manje.</td>
        <td class="treca"> <input type="radio" name="stavka28" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka28" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.16.a.</td>
        <td>Potvrdite da ste Pregledali konfiguracijske postavke baze podataka i aplikacije i verificirati da su svi korisnici autentificirani prije omogućavanja pristupa.</td>
        <td class="treca"> <input type="radio" name="stavka29" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka29" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.16.b.</td>
        <td>Potvrdite da ste pregledali konfiguracijske postavke baze podataka i aplikacije kako bi omogućili svim korisnicima pristup bazi te upite i akcije nad njom samo preko programskih metoda. </td>
        <td class="treca"> <input type="radio" name="stavka30" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka30" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.16.c.</td>
        <td>Potvrdite da ste pregledali konfiguracijske postavke baze podataka i aplikacije kako bi ograničili/onemogučili direktan pristup bazi ili postavljanje upita nad njom</td>
        <td class="treca"> <input type="radio" name="stavka31" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka31" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>8.5.16.d.</td>
        <td>Potvrdite da ste pregledali identifikatore aplikacija zadužene za bazu podataka i ostale identifikatore bliskih aplikacija kako bi utvrdili da samo aplikacije mogu koristit njima pridjeljene identifikatore, te da ne postoji mogućnost da budu korištene od strane individualnih korisnika ili procesa.</td>
        <td class="treca"> <input type="radio" name="stavka32" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka32" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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