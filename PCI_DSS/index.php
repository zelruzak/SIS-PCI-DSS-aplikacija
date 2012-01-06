<?php include_once("header.php"); ?>

<div id="content">
<h1> Dobro došli na stranice alata za provjeru usklađenosti s PCI-DSS normom. </h1>

<p><img class="pic" src="Slike/kartice_lokot.png"  height="200" alt="Kartice i lokot" /></p>
		<?php if(isset($_SESSION['korisnik'])){ ?>
            	<p class="index"> Započnite provjeru usklađenosti sa <a href="./provjera.php" class="submit"> Provjera </a> </p> 
        <?php } else {?>
                <p class="index"> Za korištenje ovoga alata je potrebna <a href="./prijava.php" class="submit"> Prijava </a> 
                <br />
                U slučaju da nemate kreiran račun, potrebna je <a href="./registracija.php" class="submit"> Registracija </a> </p>
        <?php } ?>
</div>

<?php include_once("footer.php"); ?>

</div>
</body>
</html>