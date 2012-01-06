<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev12
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev12'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Održavati politiku, koja osigurava sigurnost informacija za sve zaposlenike  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev12"/>
	<tr class="bold">
    	<td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>12.1.</td>
        <td>Potvrdite da ste provjerili informacije o sigurnosnoj politici te utvrditit da je politika objavljena i da je sve relevantno osoblje uključujući i trgovce i ostale poslovne partnere upoznato s njom.</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.1.1.</td>
        <td>Potvrdite da ste provjerili da politika zadovoljava sve PCI DSS zahtjeve. </td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.1.2.a.</td>
        <td>Potvrdite da ste provjerili da je u godišnjoj procjeni rizika dokumentirana identifikacija prijetnji, ranjivosti i rezultat o procjeni rizika </td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.1.2.b.</td>
        <td>Potvrdite da ste pregledali dokumentaciju o procjeni rizika kako bi utvrdili da se procjena rizika provodi barem jednom godišnje. </td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.1.3.</td>
        <td>Potvrdite da ste provjerili da su informacije o sigurnosnoj politici pregledane barem jednom godišnje i ažurirane ukoliko je potrebno. </td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.2.</td>
        <td>Potvrdite da ste provjerili dnevne sigurnosne operativno procedure te utvrdili da su konzistentne sa ovim specifikacija i sadrže administrativne i tehničke procedure za svaki zahtjev. </td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>12.3.</td>
        <td colspan="2">Ispitati korištenje politike o korištenju kritičnih tehnologija te djelovati na sljedeći način:</td>
    </tr>
    <tr>
        <td>12.3.1.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva izričitu dozvolu od autorizirane strane kako bi se koristila neka tehnologija </td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.2.</td>
        <td>Potvrdite da ste provjerili da politika korištenja tehnologija zahtjeva da korisnik bude autentificiran korisničkim identifikatorom (ID) i lozinkom ili drugom autentikacijskom oznkaom </td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.3.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva popis svih uređaja i osoblja koje je ovlašteno koristiti takve uređaje </td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.4.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva označavanje uređaja tako da se mogu povezati sa vlasnikom,npr. informacije za kontaktiranje te namjena. </td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.5.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva prihvatljivu uporabu tehnologije </td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.6.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva prihvatljivu lokaciju na mreži za tehnologiju. </td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.7.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva popis proizvoda koje je tvrtka odobrila </td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.8.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva automatsko prekidanje sesija tehnologijama koje djeluju na daljinu nakon određenog vremena neaktivnosti. </td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.9.</td>
        <td>Potvrdite da ste provjerili da politika zahtjeva aktiviranje tehnologija koje djeluju na daljinu trgovcima i poslovnim partnerima samo kada im je to potrebno te deaktivacija odmah nakon uporabe. </td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.3.10.</td>
        <td>Potvrdite da ste provjerili da politika onemogućava kopiranje, premještanje ili spremanje kartičnih podataka na lokalne tvrde diskove i prenosive elektroničke medije kada se pristupa podacima putem tehnologija koje djeluju na daljinu. </td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.4.</td>
        <td>Potvrdite da ste provjerili da sigurnosna politika jasno definira odgovornosti o informacijskoj sigurnosti cijelom osoblju. </td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>12.5.</td>
        <td colspan="2">Provjeriti da je informacijska sigurnost formalno dodjeljena voditelju sigurnosti ili nekom drugom članu koji posjeduje znanje o sigurnosti.
Provjeriti politiku informacijske sigurnosti i procedure kako bi utvrdili da su sljedeće odgovornosti formalno dodjeljene:</td>
    </tr>
    <tr>
        <td>12.5.1.</td>
        <td>Potvrdite da ste provjerili da je odgovornost kreiranja i distribuiranja sigurnosnih politika formalno dodjenjena. </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.5.2.</td>
        <td>Potvrdite da ste provjerili da je odgovornost praćenja i analiziranja sigurnosnih obavijesti i informacija te njihovo distribuiranje odgovarajućem osoblju formalno dodjeljena. </td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.5.3.</td>
        <td>Potvrdite da ste provjerili da je odgovornost kreiranja i distribuiranja sigurnosnih reakcija u slučaju incidenta i eskalacijskih procedura formalno dodjeljena. </td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.5.4.</td>
        <td>Potvrdite da ste provjerili da je odgovornost rukovođenja korisničkim računima i autentikacijom formalno dodjeljena. </td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.5.5.</td>
        <td>Potvrdite da ste provjerili da je odgovornost nadzora i kontrole svih pristupa podacima formalno dodjeljena. </td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.6.</td>
        <td>Potvrdite da ste provjerili postojanost programa za sigurnosno informiranje osoblja. </td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.6.1.a.</td>
        <td>Potvrdite da ste provjerili da program sigurnosne informiranosti pokriva nekoliko metoda za komuniciranje i edukaciju osoblja (posteri, promocije, sastanci). </td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.6.1.b.</td>
        <td>Potvrdite da ste provjerili da osoblje prisustvuje treningu informiranosti prilikom zaposlenja te bar jednom godišnje.  </td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.6.2.</td>
        <td>Potvrdite da ste provjerili da sigurnosna informiranost zahtjeva od osoblja da potvrde da su barem jednom godišnje pročitali i razumiju politiku sigurnosti. </td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.7.</td>
        <td>Potvrdite da zahtjevate od odjela za ljudske potencijale provjeru potencijalnog zaposlenika koji će imati pristup kartičnom okruženju i podacima. </td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>12.8.</td>
        <td colspan="2">Ukoliko entitet dijeli kartične podatke sa pružateljom usluga, onda kroz promatranje i pregled politka i procedura te pregled dokumentacije treba učiniti sljedeće:</td>
    </tr>
    <tr>
        <td>12.8.1.</td>
        <td>Potvrdite da ste provjerili je li se održava lista pružatelja usluga.  </td>
        <td class="treca"> <input type="radio" name="stavka28" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka28" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.8.2.</td>
        <td>Potvrdite da ste provjerili da pisana suglasnost sadrži potvrdu pružatelja usluga o njihovoj odgovornosti za sigurnost kartičnih podataka. </td>
        <td class="treca"> <input type="radio" name="stavka29" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka29" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.8.3.</td>
        <td>Potvrdite da ste provjerili da dokumentirane politike i procedure budu poštivane uključujući uključujući određivanje vrijednosti prije ostvarivanja pružatelja usluga.</td>
        <td class="treca"> <input type="radio" name="stavka30" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka30" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.8.4.</td>
        <td>Potvrdite da ste provjerili da entitet provodi nadzor o sukladnosti pružatelja usluga sa PCI DSS-om </td>
        <td class="treca"> <input type="radio" name="stavka31" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka31" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>12.9.</td>
        <td colspan="2">Ispitati da plan reakcije u slučaju incidenta i odgovarajuće procedure budu provedene na sljedeći način:</td>
    </tr>
    <tr>
        <td>12.9.1.a.</td>
        <td>Potvrdite da ste provjerili da plan reakcije u slučaju incidenta uključuje:
        <ul>
        <li>uloge, odgovornosti te načine komunikacije i kontaktiranja</li>
        <li>specijalitirane procedure reakcije u slučaju incidenta</li>
        <li>procesi obnavljanja kontinuiteta i posla</li>
        <li>procesi kreiranja sigurnosne kopije podataka</li>
        <li>analiza pravnih zahtjeva za prijavljivanje problema</li>
        <li>pokrivenost i reakcije za sve kritične komponente sustava</li>
        <li>reference o procedurama za reakciju u slučaju incidenta prema plativnim brenovima</li>
        </ul>
         </td>
        <td class="treca"> <input type="radio" name="stavka32" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka32" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.1.b.</td>
        <td>Potvrdite da ste pregledali dokumentaciju od zadnjeg prijavljenog incidenta te utvrditi dali se pridržavalo koraka navedenih u planu reakcije u slučaju incidenta.  </td>
        <td class="treca"> <input type="radio" name="stavka33" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka33" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.2.</td>
        <td>Potvrdite da ste provjerili da se testiranje plana provodi barem jednom godišnje </td>
        <td class="treca"> <input type="radio" name="stavka34" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka34" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.3.</td>
        <td>Potvrdite da ste provjerili kroz pregled i ispitivanje politku da se utvrdi je li postoji imenovano osoblje koje je dostupno 0-24 kako bi reagiralo na upozorenja te uočilo bilo kakvu neautoriziranu aktivnost, detekciju, neautorizirani bežičnu pristupnu točku, kritična IDS upozorenja ili neautoriziranu promjenu sadržaja ili sustavskih podataka. </td>
        <td class="treca"> <input type="radio" name="stavka35" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka35" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.4.</td>
        <td>Potvrdite da ste provjerili politike sigurnosti da bi utvrdili dali se provode treninzi osoblja koje je zaduženo za reagiranje na incidente. </td>
        <td class="treca"> <input type="radio" name="stavka36" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka36" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.5.</td>
        <td>Potvrdite da ste provjerili je li su procesi i reakcije sustava za nadzor koji uključuju i detekciju neautorizirane bežične pristupne točke sadržane u planu reakcije u slučaju incidenta. </td>
        <td class="treca"> <input type="radio" name="stavka37" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka37" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>12.9.6.</td>
        <td>Potvrdite da ste provjerili sigurnosne politike da se utvrdi da postoji proces modifikacije i razvoja plana reakcije u slučaju incidenta temeljen na novim saznanjima i u skaldu sa tehnološkim ravojem. </td>
        <td class="treca"> <input type="radio" name="stavka38" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka38" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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