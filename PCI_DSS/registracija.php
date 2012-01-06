<?php include_once("header.php"); ?>

<div id="content">

<form id="registration" method="post" name="provjera" action="provjera_za_registraciju.php">
<table>			
                <?php if(isset($_GET['k'])) { ?>
					<tr><td colspan="2"> Korisničko ime je zauzeto!</td></tr>
				<?php } ?>
                <tr>
					<td> <label for="kor_ime">Korisničko ime: </label> </td>
					<td> <input type="text" name="kor_ime" id = "kor_ime"/> 
                    

					</td>
				</tr>
                
				<tr>
					<td> <label for="ime">Ime: </label> </td>
					<td> <input type="text" name="ime" id = "ime"/> </td>

				</tr>	
				<tr>	
					<td> <label for="prezime">Prezime: </label> </td>
					<td> <input type="text" name="prezime" id = "prezime"/> </td>
									
				</tr>
                <tr>
					<td> <label for="naziv_poduzeca">Naziv poduzeća: </label> </td>
					<td> <input type="text" name="naziv_poduzeca" id = "naziv_poduzeca"/> </td>
				</tr>	
                
				<tr>
					<td> <label for="lozinka">Lozinka: </label> </td>

					<td> <input type="password" name="lozinka" id = "lozinka"/> </td>
				</tr>
				
                <?php if(isset($_GET['l'])) { ?>
					<tr><td colspan="2"> Lozinke moraju biti jednake!</td></tr>
				<?php } ?>
				<tr>
					<td> <label for="lozinka1">Ponovljena lozinka: </label> </td>

					<td> <input type="password" name="lozinka1" id = "lozinka1"/> </td>
					
					
				</tr>
						
				<tr>	
					<td colspan="2" align="center"> <input class="submit" name="salji" type="submit" value="Šalji"/> </td>
                </tr>
                <?php if(isset($_GET['p'])) { ?>
					<tr><td colspan="2"> Sve ćelije se moraju popuniti!</td></tr>
				<?php } ?>	
			</table>		
		</form>
</div>

<?php include_once("footer.php"); ?>

</div>
</body>
</html>