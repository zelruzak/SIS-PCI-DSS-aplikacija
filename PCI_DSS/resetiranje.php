<?php
	session_start();
	require("config.php");
	$kor_ime = $_SESSION['korisnik'];
	$sql = "UPDATE trgovci SET
					zahtjev1 = 'NNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev2 = 'NNNNNNNNNNNNNNNNNNNNNN',
					zahtjev3 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev4 = 'NNNNNNNN',
					zahtjev5 = 'NNNNNN',
					zahtjev6 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev7 = 'NNNNNNN',
					zahtjev8 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev9 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev10 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev11 = 'NNNNNNNNNNNNNNNNNNNNNNNN',
					zahtjev12 = 'NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN'
					WHERE kor_ime = '$kor_ime'";
	mysql_query($sql) or die(mysql_error());				
	header("Location:zahtjev1.php");
?>