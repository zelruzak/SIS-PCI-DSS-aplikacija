<?php session_start();?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PCI-DSS provjera usklađenosti</title>
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

<div id="header">

<a href="./index.php" class="menu"> Početna </a>
<a href="./o_normi.php" class="menu"> O normi </a>
<a href="./zahtjevi.php" class="menu"> Zahtjevi </a>

<?php if(isset($_SESSION['korisnik'])){ ?>
	<a href="./provjera.php" class="menu"> Provjera </a>
    
	<a href="./prijava.php?logout" class="signup"> Odjava </a>
    <div class="user"> Korisnik: <?php echo $_SESSION['korisnik']; ?></div>
<?php } else { ?>
    <a href="./registracija.php" class="signup"> Registracija </a>
    <a href="./prijava.php" class="signup"> Prijava </a> 
<?php }?>

<div class="clear"></div>
</div>