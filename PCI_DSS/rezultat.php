<?php include_once("header.php"); 
		$kor_ime = $_SESSION['korisnik'];
		require("config.php");
		$sql = "SELECT zahtjev1, zahtjev2, zahtjev3, zahtjev4, zahtjev5, zahtjev6, zahtjev7, zahtjev8, zahtjev9, zahtjev10, zahtjev11, zahtjev12
			FROM trgovci
			WHERE kor_ime='$kor_ime'";
		$rs = mysql_query($sql) or die(mysql_error());
		$red = mysql_fetch_assoc($rs);
		
		$niz = $red['zahtjev1'];
		foreach($red as $niz){
			if ((strpos($niz, 'N') === false)){
					$sve = $sve ."D";
				}else {	
					$sve = $sve ."N";
				}
		}
		function daNe($sve) {
			static $i = 0;
			if($sve[$i++] == 'D') {
				echo "<img src='Slike/yes.png' height='30' alt='valja' class='yesno'>";
			}else{
				echo "<img src='Slike/no.png' height='30' alt='ne valja' class='yesno'>";				}
		}
		function ukupno($sve){
			if(strpos($sve, 'N') === false){
					echo "<img src='Slike/yes.png' height='40' alt='sve valja' class='yesno'>";
				}else {	
					echo "<img src='Slike/no.png' height='40' alt='ne valja sve' class='yesno'>";
				}
		}
		

?>
<div id="content">
	<?php include_once("header_provjera.php"); ?>
    <h1> Rezultat provjere usklađenosti s PCI-DSS normom:</h1>
    
    <ul class="lista_zahtjeva">
        <li class="bold">izgraditi i održavati sigurnosnu mrežu</li>
        <ul>
            <li class="margin_bottom">1. instalirati i održavati firewall da bi se zaštitili podaci vlasnika kartica <?php daNe($sve);?> </li>
            <li class="margin_bottom">2. ne koristiti zadane sustavske lozinke i druge sigurnosne parametre <?php daNe($sve);?></li>
        </ul>
        <li class="bold">zaštititi podatke vlasnika kartica</li>
        <ul>
            <li class="margin_bottom">3. zaštititi pohranjene podatke vlasnika kartica <?php daNe($sve);?></li>
            <li class="margin_bottom">4. kriptirati transmisiju podataka o karticama kroz javne mreže <?php daNe($sve);?></li>
        </ul>
        <li class="bold">održavati program upravljanja ranjivostima</li>
        <ul>
            <li class="margin_bottom">5. koristiti i redovito ažurirati antivirusni softver ili programe <?php daNe($sve);?></li>
            <li class="margin_bottom">6.razvijati i održavati sigurne sustave i aplikacije <?php daNe($sve);?></li>
        </ul>
        <li class="bold">implementirati jake mjere kontrole pristupa</li>
        <ul>
            <li class="margin_bottom">7. ograničiti pristup podacima po principu Što tko treba znati <?php daNe($sve);?></li>
            <li class="margin_bottom">8. dati svakoj osobi s pristupom računalu jedinstveni ID <?php daNe($sve);?></li>
            <li class="margin_bottom">9. ograničiti fizički pristup podacima vlasnika kartice <?php daNe($sve);?></li>
        </ul>
        <li class="bold">redovito pratiti i testirati mreže</li>
        <ul>
            <li class="margin_bottom">10. pratiti i snimati sav pristup mrežnim resursima i podacima vlasnika kartica <?php daNe($sve);?></li>
            <li class="margin_bottom">11. redovito testirati sigurnosne sustave i procese <?php daNe($sve);?></li>
        </ul>
        <li class="bold">održavati informacijsku politiku sigurnosti</li>
        <ul>
            <li class="margin_bottom">12. održavati politiku, koja osigurava sigurnost informacija za sve zaposlenike <?php daNe($sve);?></li>
	</ul>
</ul>
<h2> Ukupna Usklađenost PCI-DSS normom <?php ukupno($sve);?></h2>
</div>




<?php include_once("footer.php"); ?>

</div>
</body>
</html>