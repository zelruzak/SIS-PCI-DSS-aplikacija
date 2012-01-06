<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev11
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		$niz = $red['zahtjev11'];
		$i=0;
?>



<div id="content">
	<?php include_once("header_provjera.php"); ?>
    
    
    <h2>Redovito testirati sigurnost sustava i procesa   </h2>
    
<form method="post" name="zahtjev" action="obrada.php">
<table class="tablica_zahtjeva">
	<input  type="hidden" name="ID_zahtjeva" value="zahtjev11"/>
    <tr>
        <td>11.1.a.</td>
        <td>Potvrdite da ste provjerili da imate dokumentirani proces detekcije te provjeravate bežične pristupne točke svakih 3 mjeseca.</td>
        <td class="treca"> <input type="radio" name="stavka1" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka1" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.1.b.</td>
        <td>Potvrdite da ste provjerili da metodologija adekvatno može identificirati bilo kakvu neautoriziranu bežičnu pristupnu točku uključujući minimalno sljedeće:
        <ul>
        <li>WLAN kartice umetnute u sustavske komponente</li>
        <li>prijenosne bežične uređaje spojene na sustavske komponente</li>
        <li>bežične uređaje spojene na mrežni port ili mrežni uređaj</li>
        </ul>
         </td>
        <td class="treca"> <input type="radio" name="stavka2" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka2" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.1.c.</td>
        <td>Potvrdite da ste provjerili da se dokumentirani proces identifikacije neautoriziranih pristupnih točaka izvodi barem svaka 3 mjeseca za sve sustavske komponente. </td>
        <td class="treca"> <input type="radio" name="stavka3" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka3" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.1.d.</td>
        <td>Potvrdite da ste provjerili, ako je nadzor automatiziran, konfiguraciju tako da obaviještava osoblje o promjenama. </td>
        <td class="treca"> <input type="radio" name="stavka4" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka4" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.1.e.</td>
        <td>Potvrdite da ste provjerili da organizacijski plan u slučaju incidenta uključuje i aktivnosti koje treba provesti i u slučaju da se detektira neki neautorizirani bežični uređaj.  </td>
        <td class="treca"> <input type="radio" name="stavka5" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka5" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr class="bold">
    	<td>11.2.</td>
        <td colspan="2">Provjeriti da se interna i eksterna skeniranja ranjivosti provode na sljedeći način:</td>
    </tr>
    <tr>
        <td>11.2.1.a.</td>
        <td>Potvrdite da ste pregledali izvještaj skeniranja te provjerili da su se unutar 12 mjeseci provela 4 skeniranja interne ranjivosti, svakih 3 mjeseca  </td>
        <td class="treca"> <input type="radio" name="stavka6" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka6" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.1.b.</td>
        <td>Potvrdite da ste provjerili da izvještaji skeniranja uključuju i ponovno skeniranja sve dok se ne postigne prolazni rezultat, ili su sve ranjivosti visokog rizika riješene kako je definirano u PCI DSS zahtjevu 6.2 </td>
        <td class="treca"> <input type="radio" name="stavka7" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka7" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.1.c.</td>
        <td>Potvrdite da ste provjerili da je skeniranje sprovedeno kvalificiranim internim resursom ili kvalificiranom eksternom trećom stranom te ako je prihvatljivo tester posjeduje organizacijsku neovisnost. </td>
        <td class="treca"> <input type="radio" name="stavka8" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka8" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.2.a.</td>
        <td>Potvrdite da ste provjerili rezultate zadnja 4 eksterna skeniranja ranjivosti te utvrditi da su u posljednjih 12 mjeseci provedena 4 eksterna skeniranja ranjivosti. </td>
        <td class="treca"> <input type="radio" name="stavka9" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka9" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.2.b.</td>
        <td>Potvrdite da ste provjerili da rezultati skeniranja svaka 3 mjeseca zadovoljavaju zahtjeve ASV-a </td>
        <td class="treca"> <input type="radio" name="stavka10" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka10" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.2.c.</td>
        <td>Potvrdite da ste provjerili rezultate skeniranja kako bi verificirali da su skeniranja dovršena od strane ASV-a i odobrena od strane PCI SSC-a </td>
        <td class="treca"> <input type="radio" name="stavka11" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka11" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.3.a.</td>
        <td>Potvrdite da ste provjerili dokumentaciju o kontroli promjena i rezultate skeniranja kako bi utvrdili da je skenirana i izmjenjena komponenta. </td>
        <td class="treca"> <input type="radio" name="stavka12" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka12" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.3.b.</td>
        <td>Potvrdite da ste pregledali rezultate skeniranja te utvrditi da proces ponovnog skeniranja treba provoditi sve dok se ne postignu sljedeći zahtjevi: 
        <ul>
        <li>u rezultatima eksternog skeniranja ne smije biti ranjivosti čija vrijednost prelazi 4.0 po CVSS-u.</li>
        <li>u rezultatima internog skeniranja svi rezulati moraju biti prolazni ili sve ranjivosti „visoke“ razine definirane PCI DSS zahtjevom 6.2 moraju biti riješeni.</li>
        </ul>
        </td>
        <td class="treca"> <input type="radio" name="stavka13" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka13" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.2.3.c.</td>
        <td>Potvrdite da je skeniranje sprovedeno kvalificiranim internim resursom ili kvalificiranom eksternom trećom stranom te ako je prihvatljivo tester posjeduje organizacijsku neovisnost.  </td>
        <td class="treca"> <input type="radio" name="stavka14" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka14" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.3.a.</td>
        <td>Potvrdite da ste provjerili rezultate penetracijskih testiranja kako bi utvrdili da se testiranja provode barem jednom godišnje ili nakon značajnih promjena u okruženju. </td>
        <td class="treca"> <input type="radio" name="stavka15" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka15" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.3.b.</td>
        <td>Potvrdite da ste provjerili da su zapažene ranjivosti ispravljene i ponovno testirane. </td>
        <td class="treca"> <input type="radio" name="stavka16" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka16" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.3.c.</td>
        <td>Potvrdite da je testiranje sprovedeno kvalificiranim internim resursom ili kvalificiranom eksternom trećom stranom te ako je prihvatljivo tester posjeduje organizacijsku neovisnost. </td>
        <td class="treca"> <input type="radio" name="stavka17" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka17" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.3.1.</td>
        <td>Potvrdite da ste provjerili da penetracijsko testiranje uključuje penetracijske testove na mrežnoj razini. Takvi testovi bi trebali uključivati komponente podrške mrežnih funkcija kao i operacijskih sustava </td>
        <td class="treca"> <input type="radio" name="stavka18" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka18" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.3.2.</td>
        <td>Potvrdite da ste provjerili da penetracijsko testiranje uključuje penetracijske testove na aplikacijskoj razini. Takvi testovi bi trebali uključivati minimalno ranjivosti navedene u zahtjevu 6.5 </td>
        <td class="treca"> <input type="radio" name="stavka19" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka19" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.4.a.</td>
        <td>Potvrdite da ste provjerili da se korištenje sustava prevencije i detekcije nedopuštenog upada u okolinu kartičnih podataka i kritičnih točaka unutar okoline kartičnih podataka nadzire. </td>
        <td class="treca"> <input type="radio" name="stavka20" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka20" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.4.b.</td>
        <td>Potvrdite da su IDS i/ili IPS konfigurirani da obavijeste osoblje o sumnjivim aktivnostima. </td>
        <td class="treca"> <input type="radio" name="stavka21" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka21" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.4.c.</td>
        <td>Potvrdite da ste provjerili IDS/IPS konfiguracije i potvrditi da su IDS/IPS uređaji konfigurirani, održavani i ažurirani po instrukcija trgovca kako bi pružale optimalnu zaštitu. </td>
        <td class="treca"> <input type="radio" name="stavka22" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka22" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.5.a.</td>
        <td>Potvrdite da ste provjerili da se koriste alati za nadzor podatkovnog integriteta nad kartičnom okolinom i podacima te motriti postavke sustava i nadzirane datoteke, kao i pregledavanje rezultata nadziranih aktivnosti. </td>
        <td class="treca"> <input type="radio" name="stavka23" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka23" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
    </tr>
    <tr>
        <td>11.5.b.</td>
        <td>Potvrdite da ste provjerili je li su alalti konfigurirani da obavijeste osoblje o neautoriziranoj modifikaciji kritičnih podataka te obavljanje usporedbe kritičnih podataka na tjednoj bazi. </td>
        <td class="treca"> <input type="radio" name="stavka24" value="D" <?php if($niz[$i] == 'D'){echo "checked";}?>/> Da 
        <input type="radio" name="stavka24" value="N" <?php if($niz[$i++] == 'N'){echo "checked";}?>/> Ne</td>
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