<?php
session_start();
$valja = true;
if(isset($_POST['ok'])) {
	require("config.php");

	$kor_ime = mysql_escape_string($_POST['kor_ime']);
	$lozinka = mysql_escape_string($_POST['lozinka']);
	
	$sql = "SELECT * FROM trgovci 
		WHERE kor_ime = '$kor_ime'
		AND lozinka = '$lozinka'";

	$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs) == 1) {

		$red = mysql_fetch_assoc($rs);
				
			$_SESSION['korisnik'] = $kor_ime;		
			header('Location:index.php');
		
	} else {
		$valja = false;
	}		
}

if(isset($_GET['logout'])) {
	unset($_SESSION['korisnik']);
	session_destroy();
}
include_once("header.php");
?>


<div id="content">

<form id="login" method="post" action="prijava.php">
	<table>
    	<?php if(isset($_GET['reg'])) { ?>
    	<tr><td colspan="2"> Registracija uspješna!</td></tr>
        <?php } ?>
        <?php if(isset($_GET['logout'])) { ?>
    	<tr><td colspan="2"> Odjava uspješna!</td></tr>
        <?php } ?>
        <?php if($valja == false) { ?>
    	<tr><td colspan="2"> Kriva prijava!</td></tr>
        <?php } ?>
        
		<tr>
		<td>Korisničko ime: &nbsp; &nbsp; &nbsp;</td> 
		<td><input type="text" name="kor_ime"/> </td>
		</tr>
		<tr>
		<td>Lozinka: </td>
		<td><input type="password" name="lozinka"/> </td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input class="submit" type="submit" name="ok" value="Prijava"/></td>
		</tr>
	</table>
</form>

</div>

<?php include_once("footer.php"); ?>

</div>
</body>
</html>