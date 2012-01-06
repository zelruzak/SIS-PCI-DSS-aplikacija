<?php include_once("header.php"); ?>

<div id="content">
	<?php include_once("header_provjera.php"); ?>
    <h1> Provjera usklađenosti s PCI-DSS normom</h1>
    <p> Provjera se provodi na način da korisnik potvrđuje stavke iz pojedinih zahtjeva koje vrijede za njegovo poduzeće. </p>
    <p>Pjedini zahtjev je u potpunosti zadovoljen ako se sve stavke tog zahtjeva potvrde. Usporedno s time, ako barem jedna stavka nije potvrđena, ni zahtjev nije potvrđen.</p>
    <p>Ako su svi zahtjevi zadovoljeni, utvrđena je potpuna zadovoljenost s PCI-DSS normom.</p>
    <br /> <br />
    <p>Pristupite novoj provjeri. <a href="resetiranje.php" class="submit"> Nova provjera </a>
    (Brišu se svi podaci prethodne provjere.)</p>
</div>




<?php include_once("footer.php"); ?>

</div>
</body>
</html>