<?php
	if(isset($_POST['salji'])) {
		require("config.php");
		$kor_ime = mysql_real_escape_string($_POST['kor_ime']);
		$ime = mysql_real_escape_string($_POST['ime']);
		$prezime = mysql_real_escape_string($_POST['prezime']);
		$lozinka = mysql_real_escape_string($_POST['lozinka']);
		$lozinka1 = mysql_real_escape_string($_POST['lozinka1']);
		$naziv_poduzeca = mysql_real_escape_string($_POST['naziv_poduzeca']);
		
		$ok=true;
		

			
		if (empty($kor_ime) || empty($ime) || empty($prezime) || empty($lozinka) || empty($naziv_poduzeca)){
			$ok=false;
			$poruka .= 'p&';
		}
		

		$sql = "SELECT kor_ime FROM trgovci";
		$rs =  mysql_query($sql);
		while($row = mysql_fetch_array($rs)){
				if ($row['kor_ime']==$kor_ime){
					$ok=false;
					$poruka .= 'k&';
				}
			}
		
		
		if($lozinka!=$lozinka1){
			$ok=false;
			$poruka .= 'l&';
		}
		
		if (!$ok){
				header("Location:registracija.php?$poruka");
		}
		else
		{			

				//registracija
				
				$sql = "INSERT INTO trgovci (kor_ime, ime, prezime, lozinka, naziv_poduzeca) VALUES
				('$kor_ime', '$ime', '$prezime', '$lozinka', '$naziv_poduzeca')";
				$rs = mysql_query($sql) or die(mysql_error());
				if ($rs)
				{
					header("Location:prijava.php?reg");
				}

			
		}
		
}

?>

