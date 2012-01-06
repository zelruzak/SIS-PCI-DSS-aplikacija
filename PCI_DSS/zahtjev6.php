<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev6
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev6'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Razvijati i održavati sigurne sustave i aplikacije  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev6"/>
    <tr>
        <td>6.1.a.</td>
        <td>Potvrdite da ste za dio sustavskih komponenti usporedili listu sigurnosnih zakrpi i provjerili jesu li jednake listi najnovijih sigurnosnih zakrpi te potvrdili da su instalirane najnovije zakrpe</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.1.a.</td>
        <td>Potvrdite da ste ispitali politike vezane uz instalaciju sigurnosnih zakrpa i potvrdili da one zahtjevaju insalaciju novih zakrpi najmanje jednom mjesečno</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.2.a.</td>
        <td>Potvrdite da ste intervjuirali odgovorno osoblje da bi se potvrdilo da su procesi implementirani da otkrivaju nove sigurnosne ranjivosti</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.2.b.</td>
        <td>Potvrdite da procesi za otkrivanje novih ranjivosti uključuju vanjske izvore s informacijama o ranjivostima</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.a.</td>
        <td>Potvrdite da ste ispitali proces razvoja aplikacija da bi se potvrdilo da je on temeljen na industrijskim standardima i primjerima najbolje prakse</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.b.</td>
        <td>Potvrdite da ste ispitali proces razvoja aplikacija da bi se potvrdilo da je informacijska sigurnost od početka uključena u taj proces</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.c.</td>
        <td>Potvrdite da ste ispitali proces razvoja aplikacija da bi se potvrdilo da su razvijene u skladu s PCI – DSS normom</td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.1.</td>
        <td>Potvrdite da su korisnički računi i lozinke  iz aplikacije uklonjeni prije nego što se krenulo u proizvodnju ili izdavanje korisnicima</td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.2.a.</td>
        <td>Potvrdite da ste provjerili i pregledali politike da bi se potvrdilo da je sve promjene u kodu aplikacije pregledana na sljedeći način:
        <ul>
        <li>promjene koda su pregledane od stane neke osobe, koja ga nije razvijala ili osobe koja ima znanje programiranja</li>
        <li>pregledati kod i utvrditi da je u skladu sa smjernicama sigurnog programiranja (zahtjev 6.5.)</li>
        <li>prikladni ispravci koda su implementirani prije izdavanja</li>
        <li>prije izdavanja je pregled koda odobren od strane menadžmenta</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.3.2.b.</td>
        <td>Potvrdite da ste odabrali dio postojećih aplikacijskih promjena i utvrdili da su razvijene prema točki 6.3.2.a</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>6.4.</td>
        <td colspan="2">Kreirati test za procese i procedure promjena, intervjue s sistem i mrežnih administratorima i testiranje bitnih podataka da bi se potvrdilo sljedeće:</td>
    </tr>
    <tr>
        <td>6.4.1.</td>
        <td>Potvrdite da je razdvojena razvojna/testna i proizvodna okolina tako da svaka ima kontrolu pristupa</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.2.</td>
        <td>Potvrdite da su razdvojene dužnosti osoblja u razvojnoj/testnoj i proizvodnoj okolini</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.3.</td>
        <td>Potvrdite da se produkcijski podaci (pravi PANovi) ne koriste za testiranje ili razvoj</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.4.</td>
        <td>Potvrdite da su testni podaci i računi uklonjeni prije nego što sustav postane aktivan</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.5.1.</td>
        <td>Potvrdite da je dokumentacija utjecaja uključena u dokumentaciju o promjenama za svaku napravljenu promjena</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.5.2. </td>
        <td>Potvrdite da postoji dokumentirana dozvola od strane ovlaštenih osoba za svaki promjenu</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.5.3.a.</td>
        <td>Potvrdite da ste za svaku promjenu, potvrdili testiranjem funkcionalnosti da  promjene ne utječu na sigurnost sustava</td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.5.3.b.</td>
        <td>Potvrdite da ste za svaku promjenu koda potvrdili da su sva ažuriranja testirana i u skladu sa zahtjevom 6.5. iz ove norme prije izdavanja u proizvodnju</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.4.5.4.</td>
        <td>Potvrdite da su sve procedure za povlačenje spremne za svaku promjenu </td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.a.</td>
        <td>Potvrdite da ste provjerili proces razvoja softvera i Potvrdili da zahtjeva treniranje za tehnike sigurnog programiranja za developere temeljena na primjerima najbolje prakse </td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.b.</td>
        <td>Potvrdite da ste intervjuirali dio developera i doakazali da znaju što su tehnike sigurnog programiranja (tehnike programiranja sigurnih aplikacija)</td>
        <td class="treca"> <input type="radio" name="stavka21b" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21b" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.1.</td>
        <td>Potvrdite da aplikacije nisu osjetljive na sve vrste upada (injection) a najviše SQL injection (provjeriti da korisnik ne može unijeti podatke koji mogu biti naredbe ili upiti)</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.2.</td>
        <td>Potvrdite da aplikacije nisu osjetljive na prekoračenje spremnika (provjeriti veličine spremnika) </td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.3.</td>
        <td>Potvrdite da aplikacije nemaju nesigurnu kriptografsku pohranu (spriječiti kriptografske ispade) </td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.4.</td>
        <td>Potvrdite da aplikacije nemaju nesigurno komuniciranje (ispravno kriptirati sve autentificirane i osjetljive komunikacije) </td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.5.</td>
        <td>Potvrdite da aplikacije nemaju neispravno upravljanje greškama (en smiju de odavati informacije preko poruka s grešakama) </td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.6.</td>
        <td>Potvrdite da aplikacije nisu osjetljive na sve druge ranjivosti klasificirane kao „visoke“ u zahtjevu 6.2. </td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.7.</td>
        <td>Potvrdite da aplikacije nisu osjetljive na cross – site scripting (XSS) (provjeriti sve parametre prije uključivanja) </td>
        <td class="treca"> <input type="radio" name="stavka28" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka28" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.8.</td>
        <td>Potvrdite da aplikacije nemaju na neispravnu kontrolu pristupa (kao što je nesigurno referenciranje na objekte, neuspješno otvaranje ograničenih URL-ova …) (ispravno autentificirati korisnike i unos, ne izlagati reference na Internet objekte korisnicima) </td>
        <td class="treca"> <input type="radio" name="stavka29" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka29" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.5.9.</td>
        <td>Potvrdite da aplikacije nisu osjetljive na cross – site request forgery (CSRF) (ne upisivati autorizacijske podatke i tokene u automatski otvorene prozore od strane preglednika) </td>
        <td class="treca"> <input type="radio" name="stavka30" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka30" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>6.6.</td>
        <td>Potvrdite da ste za aplikacije koje su javno dostupne preko weba, utvrdili da se koristi barem jedna od sljedećih metoda:
        <ul>
        <li>  potvrditi da su javne aplikacije pregledane (bilo ručno ili uz pomoć alata automatski) i to:</li>
        	<ul>
            <li>barem jednom godišnje</li>
            <li>nakon svake promjene</li>
            <li>od strane organizacije koja se bavi sigurnošću aplikacija</li>
            <li>da su sve ranjivosti ispravljene</li>
            <li>da je aplikacija ponovno pregledana nakon ispravaka</li>
            </ul>
        <li>potvrditi da je firewall web aplikacije uredno postavljen da otkriva i zaustavlja napade s weba</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka31" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka31" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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