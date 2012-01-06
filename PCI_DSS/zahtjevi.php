<?php include_once("header.php"); ?>

<div id="content">
<h1>Zahtjevi PCI-DSS norme </h1>
<p> Da bi tvrtka poslovala sukladno normi PCI–DSS mora ispuniti 12 osnovnih zahtjeva, podijeljenih u 6 područja: </p>
<ul class="lista_zahtjeva">
	<li class="bold">izgraditi i održavati sigurnosnu mrežu</li>
    <ul>
    	<li>instalirati i održavati firewall da bi se zaštitili podaci vlasnika kartica</li>
        <li>ne koristiti zadane sustavske lozinke i druge sigurnosne parametre</li>
    </ul>
    <li class="bold">zaštititi podatke vlasnika kartica</li>
    <ul>
    	<li>zaštititi pohranjene podatke vlasnika kartica</li>
        <li>kriptirati transmisiju podataka o karticama kroz javne mreže</li>
    </ul>
    <li class="bold">održavati program upravljanja ranjivostima</li>
    <ul>
    	<li>koristiti i redovito ažurirati antivirusni softver ili programe</li>
        <li>razvijati i održavati sigurne sustave i aplikacije</li>
    </ul>
    <li class="bold">implementirati jake mjere kontrole pristupa</li>
    <ul>
    	<li>ograničiti pristup podacima po principu Što tko treba znati </li>
        <li>dati svakoj osobi s pristupom računalu jedinstveni ID</li>
        <li>ograničiti fizički pristup podacima vlasnika kartice</li>
    </ul>
    <li class="bold">redovito pratiti i testirati mreže</li>
    <ul>
    	<li>pratiti i snimati sav pristup mrežnim resursima i podacima vlasnika kartica</li>
        <li>redovito testirati sigurnosne sustave i procese</li>
    </ul>
    <li class="bold">održavati informacijsku politiku sigurnosti</li>
    <ul>
    	<li>održavati politiku, koja osigurava sigurnost informacija za sve zaposlenike</li>
    </ul>
</ul>

</div>

<?php include_once("footer.php"); ?>

</div>
</body>
</html>