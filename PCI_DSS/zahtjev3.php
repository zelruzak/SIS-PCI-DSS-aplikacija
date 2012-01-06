<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev3
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev3'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Zaštititi pohranjene podatke vlasnika kartica  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev3"/>
	<tr class="bold">
    	<td>3.1.</td>
        <td colspan="2">Uspostaviti i ispitati politike, procedure i procese za pohranu i odlaganje podataka i napraviti sljedeće:</td>
    </tr>
    <tr>
        <td>3.1.1.a</td>
        <td>Potvrdite da su politike i procedure implementirane i uključuju legalne i regularne poslovne zahtjeve za pohranu podataka, uključujući specifične zahtjeve za pohranu podataka o vlasnicima kartica</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.1.1.b</td>
        <td>Potvrdite da politike i procedura uključuju odredbe za sigurno odlaganje podataka kada podaci nisu više potrebni za legalno i regularno poslovanje</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.1.1.c.</td>
        <td>Potvrdite da politike i procedure uključuju pokrivanje svih spremišta podataka vlasnika kartice</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.1.1.d.</td>
        <td>Potvrdite da politike i procedure obuhvačaju barem jedno od sljedećeg:
        <ul>
<li>programirani proces za kvartalno uklanjanje nepotrebnih pohranjenih podataka o vlasnicima kartica</li>
<li>zahtjeve za kvartalni pregled za utrvđivanje da pohranjeni podaci ne prelaze zahtjeve definirane u politici za pohranu podataka</li>
</ul></td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.1.1.e.</td>
        <td>Za dio sustavskih komponenti, koje pohranjuju podatke o vlasnicima kartica, potvrdite da pohranjeni podaci ne prelaze zahtjeve definirane u politici o pohrani </td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.2.a.</td>
        <td>Potvrdite da ne pohranjujete sjetljive autentikacijske podatke ili ,ako ih pohranjujete,da postoji poslovno opravdanje za pohranu tih podataka i da su podaci sigurni</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.2.b.</td>
        <td>Za sve druge entitete, ako primaju ili brišu osjetljive autentikacijske podatke ste kreirali i pregledali procese za sigurno brisanje podataka da bi se potvrdilo da su podaci nepovratno obrisani</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.2.1.</td>
        <td>Za dio sustavskih komponenti ste provjerili izvore podataka i potvrdili da sadržaj magnetske trake ili čipa ne sadrži ni u kom slučaju sljedeće podatke:
        <ul>
        <li>podatke o dolaznim transakcijama</li>
        <li>logovi</li>
        <li>povijesne datoteke</li>
        <li>datoteke za praćenje</li>
        <li>sheme baze podataka</li>
        <li>sadržaj baza podataka</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.2.2.</td>
        <td>Za dio sustavskih komponenti ste provjerili izvore podataka i potvrdili da troznamenkasti ili četveroznamenkasti kod otisnut na prednjoj ili stražnjoj strani kartice ne sadrži ni u kom slučaju sljedeće podatke: 
        <ul>
        <li>podatke o dolaznim transakcijama</li>
        <li>logovi</li>
        <li>povijesne datoteke</li>
        <li>datoteke za praćenje</li>
        <li>sheme baze podataka</li>
        <li>sadržaj baza podataka</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.2.3.</td>
        <td>Za dio sustavskih komponenti ste provjerili izvore podataka i potvrdili da PIN i PIN blokovi ne pohranjuju ni kom slučaju sljedeće podatke:
        <ul>
        <li>podatke o dolaznim transakcijama</li>
        <li>logovi</li>
        <li>povijesne datoteke</li>
        <li>datoteke za praćenje</li>
        <li>sheme baze podataka</li>
        <li>sadržaj baza podataka</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.3.</td>
        <td>Potvrdite da ste uspostavili i ispitali napisane politike i ispitali prikaz PAN-a da bi se potvrdilo da je PAN maskiran kada se prikazuju podaci o vlasniku kartice, osim u slučaju kada se PAN mora u potpunosti vidjeti</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.a.</td>
        <td>Potvrdite da ste pronašli i ispitali dokumentaciju, koja se koristi za zaštitu PAN-a. Potvrdite da je PAN zaštićen nekom od sljedećih metoda:
            <ul>
            <li>jednosmjerno hashiranje s jakom kriptografijom</li>
            <li>skračivanje</li>
            <li>indeksirani tokeni i blokovi</li>
            <li>jaka kriptografija s procesima i procedurama za upravljanje ključevima</li>
            </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.b.</td>
        <td>Potvrdite da ste ispitali nekoliko tablica ili datoteka iz repozitorija s uzorcima podataka za se potvrdi da je PAN nečitljiv</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.c.</td>
        <td>Potvrdite da ste ispitali nekoliko prijenosnih medija da se potvrdi da je PAN nečitljiv</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.d.</td>
        <td>Potvrdite da ste ispitali nekoliko logova da se potrvdi da je PAN ili nečitljiv ili uklonjen iz logova</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.1.a.</td>
        <td>Ako se koristi kriptiranje diska, potvrdite da je za logički pristup zaštićenim datotekama implementiran mehanizan koji je odvojen od mehanizma operacijskog sustava</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.1.b.</td>
        <td>Potvrdite da su kriptografski ključevi pohranjeni sigurno (npr. na mediju koji je zaštićen jako kontrolom pristupa)</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.4.1.c.</td>
        <td>Potvrdite da su podaci o vlasniku kartice na prijenosnom mediju kriptirani prilikom pohrane</td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>3.5.</td>
        <td colspan="2">Potvrditi procese za zaštitu ključeva, korištenih za zaštitu podataka o vlasnicima kartica od zlouporabe na sljedeći način:</td>
    </tr>
    <tr>
        <td>3.5.1.</td>
        <td>Potvrdite da ste ispitali listu korisnika koji imaju pristup podacima i potvrdili da lista uključuje samo nužne osobe</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.5.2.a.</td>
        <td>Potvrdite da ste ispitali sustavske kofiguracijske datoteke da bi se potrvdilo da su ključevi pohranjeni u kriptiranom obliku i da su ključevi za kriptiranje ključeva pohranjeni odvojeni od ključeva za kriptiranje podataka</td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.5.2.b.</td>
        <td>Potvrdite da ste identificirali lokacije spremišta da bi se potvrdilo da su ključevi pohranjeni na najmanji mogući broj lokacija</td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.a.</td>
        <td>Potvrdite da postoje procedure za upravljanje ključevima, koji se koriste za zaštitu podataka i vlasnicima kartica</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.b.</td>
        <td>Ako ste pružatelj usluga dijeli ključeve sa svojim klijentima za prijenos ili pohranu podataka o vlasnicima kartica potvrdite da postoji dokumentacija kojom su utrđene smjernice za sigurni prijenos ili pohranu tih ključeva. (Potvrdite ako se navedeno ne odnosi na vas.)</td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.1.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahtjevaju generiranje jakih ključeva</td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.2.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahjevaju sigurnu distribuciju ključeva</td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.3.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahtjevaju sigurnu pohranu ključeva </td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.4.</td>
        <td>Potvrdite potvrditi da su procedure za upravljanje ključevima implementirane tako da zahtjevaju periodične provjere ključeva</td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.5.a.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahtjevaju stavljanje u mirovanej ključeva čiji je integritet oslabio</td>
        <td class="treca"> <input type="radio" name="stavka28" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka28" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.5.b.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahtjevaju zamjenu poznatih ili sumnjivih ključeva</td>
        <td class="treca"> <input type="radio" name="stavka29" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka29" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.5.c.</td>
        <td>Potvrdite da nema ključeva koji su stavljeni u mirovanje ili zamijenjeni ili ako ih ima, potvrdite da se ti ključevi ne koriste za kriptiranje</td>
        <td class="treca"> <input type="radio" name="stavka30" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka30" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.6.</td>
        <td>Potvrdite da operacije upravljanja ključeva s čistim tekstom zahtjevaju podjelu znanja ili dualnu kontrolu</td>
        <td class="treca"> <input type="radio" name="stavka31" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka31" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.7.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahjtevaju prevenciju neautorizirane zamjene kriptografskih ključeva</td>
        <td class="treca"> <input type="radio" name="stavka32" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka32" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>3.6.8.</td>
        <td>Potvrdite da su procedure za upravljanje ključevima implementirane tako da zahtjevaju da čuvari ključeva pismeno potvrde da razumiju i prihvaćaju svoje odgovornosti</td>
        <td class="treca"> <input type="radio" name="stavka33" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka33" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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