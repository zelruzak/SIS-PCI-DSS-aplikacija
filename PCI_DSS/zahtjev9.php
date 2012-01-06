<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev9
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev9'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Ograničiti fizički pristup podacima vlasnika kartice  </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev9"/>

    <tr>
        <td>9.1.</td>
        <td>Potvrdite postojanost sigurnosnih fizičkih kontrola za svaku računalnu sobu, podatkovne centre ili druge fizičke prostore koji sadrže sustavsku ili kartičnu okolinu:
        <ul>
        <li>Potvridite da ste provjerili da je pristup kontroliran čitačima iskaznica ili drugim uređajima uključujući autorizirane iskaznice te brave i ključeve.</li>
        <li>Potvrdite da ste nadgledali pokušaj pristupa sustavskog administratora konzoli za nasumično odabrane sustave u kartičnom okruženju i verificirali da je sve zaključano kako bi sprečili ne autorizirano korištenje</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.1.1.a.</td>
        <td>Potvrdite da ste provjerili da su video kamere i/ili mehanizmi za kontrolu pristupa na odgovarajućem mjestu kako bi nadgledali ulazne/izlazne točke osjetljivog područja.</td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.1.1.b.</td>
        <td>Potvrdite da ste provjerili da su video kamere i/ili mehanizmi za kontrolu pristupa zaštićeni od oštečivanja ili isključivanja.</td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.1.1.c.</td>
        <td>Potvrdite da ste provjerili da se video kamere i/ili mehanizmi za kontrolu pristupa nadziru te da se podaci sa kamera i drugih mehanizama čuvaju barem 3 mjeseca.</td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.1.2.</td>
        <td>Potvrdite da ste ispitivanjem mrežnog administratora provjerili je li su mrežni priključci omogućeni samo internom osoblju (zaposlenicima) kada im je to potrebno te verificirali da se ostali korisnici koji imaju pristup aktivnim mrežnim priključcima nadziru.</td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.1.3.</td>
        <td>Potvrdite da ste ispitati je li je fizički pristup bežičnim pristupnim točkama, pristupnicima, mrežnim uređajima i telekomunikacijskim linijama prikladno ograničen.</td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.2.a.</td>
        <td>Potvrdite da ste pregledali procese i procedure za dodjeljivanje propusnica za ovlašteno osoblje i posjetioce, te provjerili je li su podržane sljedeće točke:
        <ul>
        <li>dodjeljivanje novih propusnica</li>
        <li>mjenjanje pristupnih zahtjeva</li>
        <li>odbiti terminirano ovlašteno osoblje i posjetioce sa propusnicom koja nije aktivna</li>		
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.2.b.</td>
        <td>Potvrdite da ste provjerili da je sustav propusnica dostupan samo autoriziranom osoblju.</td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.2.c.</td>
        <td>Potvrdite da ste ispitali funkcionalnost propusnica/iskaznica kako bi utvrdili da se lako može prepoznati ovlašteno osoblje i posjetioci.</td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>9.3.</td>
        <td colspan="2">Provjeriti dali su kontrole posjetitelja postavljene na sljedeći način:</td>
    </tr>
    <tr>
        <td>9.3.1.</td>
        <td>Potvrdite da ste provjerili korisnikov identifikator (ID) sa iskaznice kako bi utvrdili je li njegov identifikator ima ograničenje fizičkog  pristupa okolini u kojoj se nalaze kartični podaci.</td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.3.2.a.</td>
        <td>Potvrdite da ste provjerili osoblje unutar objekta kako bi utvrdili da koriste svoje identifikacijske oznake, te da se posjetioci mogu jednostavno raspoznati od ovlaštenog osoblja.</td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.3.2.b.</td>
        <td>Potvrdite da ste provjerili je li je identifikacijska oznaka posjetioca istekla</td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.3.3.</td>
        <td>Potvrdite provjerili da posjetioci koji napuštaju objekt budu zatraženi da predaju svoju identifikacijsku oznaku zbog odlaska ili zbog isteka aktivnosti oznake.</td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.4.a.</td>
        <td>Potvrdite da ste provjerili da se zapisnik o posjetiocu koristi kako kod ulaska u objekt tako i kod fizičkog pristupa računalnim sobama i podatkovnim centrima gdje se kartični podaci obrađuju i spremaju.</td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.4.b.</td>
        <td>Potvrdite da ste provjerili da zapisnik sadrži ime posjetitelja, ime tvrtke koju zastupa i ime ovlaštene osobe koja je posjetiocu dodjelila autorizirani fizički pristup, zapisnik treba čuvati minimalno 3 mjeseca.</td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.5.a.</td>
        <td>Potvrdite da ste provjerili da je fizička lokacija spremišta sigurna kako bi verificirali da je osigurana sigurnost podataka.</td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.5.b.</td>
        <td>Potvrdite da ste provjerili da se sigurnost fizičke lokacije provjerava barem jednom godišnje.</td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.6.</td>
        <td>Potvrdite da ste provjerili da procedure zaštite kartičnih podataka uključuju i kontrolu fizičke sigurnosti svih medija, uključujući računala, prijenosne memorije, papire i sva ostala sredstva za prijenos i pohranu podataka. </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.7.</td>
        <td>Potvrdite da ste provjerili postojanje politike o kontroli distribucije medija te da politika pokriva sve distribuirane medije uključujući i one distribuirane od strane individualaca.</td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.7.1.</td>
        <td>Potvrdite da ste provjerili da su svi podaci klasificirani kako bi se mogla odrediti razina tajnosti podataka.</td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.7.2.</td>
        <td>Potvrdite da ste provjerili da su svi mediji koji se šalju izvan objekta uvedeni u zapisnik i autorizirani od strane menadžmenda te poslani preko sigurnog dostavljača ili druge dostavljačke metoda koja se može sa preciznošću pratiti. </td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.8.</td>
        <td>Potvrdite da ste uzeli uzorak nedavnih zapisnika o pračenju medija izvan ojekta te provjerili dali zapisnik sadrži sve potrebne detalje praćenja kao i odgovarajuću autorizaciju menadžmenta.</td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.9.</td>
        <td>Potvrdite da ste ispitali politiku kontrole spremišta i održavanja medija te provjerili da politika zahtjeva periodičnu inventuru medija.</td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.9.1.</td>
        <td>Potvrdite da ste prikupili i provjerili zapisnike o medijima kako bi utvrdili da se provjere provode periodično barem jednom godišnje.</td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>9.10.</td>
        <td colspan="2">Provjeriti dali su kontrole posjetitelja postavljene na sljedeći način:</td>
    </tr>
    <tr>
        <td>9.10.1.a.</td>
        <td>Potvrdite da ste provjerili da su fizički materijali uništeni toliko da sa razumnom sigurnošću možemo zaključiti da se podaci ne mogu ponovno rekonstruirati.</td>
        <td class="treca"> <input type="radio" name="stavka25" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka25" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.10.1.b.</td>
        <td>Potvrdite da ste provjerili da kontejneri u kojima se skladište materijali za uništenje budu osigurani tako da nitko ne može doći do materijala koji se nalaze unutar kontejnera. </td>
        <td class="treca"> <input type="radio" name="stavka26" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka26" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>9.10.2.</td>
        <td>Potvrdite da ste provjerili da su podaci sa elektroničkih medija nepovratno uništeni pomoću odgovarajućeg sigurnosnog programa za brisanje podataka koji podliježe standardima o sigurnosnom brisanju podataka ili fizički uništili medij, npr. demagnetiziranjem. </td>
        <td class="treca"> <input type="radio" name="stavka27" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka27" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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