<?php
	session_start();
	require("config.php");
	if(isset($_POST['ok'])) {
        foreach($_POST as $key => $value) {
				if($key != "ok" && $key != "ID_zahtjeva"){
					$niz = $niz .$value;
				}
         
        }
		$zahtjev = mysql_escape_string($_POST['ID_zahtjeva']);
		$kor_ime = $_SESSION['korisnik'];
		
		$sql = "UPDATE trgovci SET
					$zahtjev = '$niz'
					WHERE kor_ime = '$kor_ime'";
				mysql_query($sql) or die(mysql_error());
				if($zahtjev == 'zahtjev1') header("Location:zahtjev2.php");
				else if ($zahtjev == 'zahtjev2') header("Location:zahtjev3.php");
				else if ($zahtjev == 'zahtjev3') header("Location:zahtjev4.php");
				else if ($zahtjev == 'zahtjev4') header("Location:zahtjev5.php");
				else if ($zahtjev == 'zahtjev5') header("Location:zahtjev6.php");
				else if ($zahtjev == 'zahtjev6') header("Location:zahtjev7.php");
				else if ($zahtjev == 'zahtjev7') header("Location:zahtjev8.php");
				else if ($zahtjev == 'zahtjev8') header("Location:zahtjev9.php");
				else if ($zahtjev == 'zahtjev9') header("Location:zahtjev10.php");
				else if ($zahtjev == 'zahtjev10') header("Location:zahtjev11.php");
				else if ($zahtjev == 'zahtjev11') header("Location:zahtjev12.php");
				else if ($zahtjev == 'zahtjev12') header("Location:rezultat.php");
	}
	
        
?>