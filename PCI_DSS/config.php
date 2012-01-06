<?php //potrebno promijeniti podatke za povezivanje s bazom
mysql_connect('SERVER','USERNAME','PASSWORD') or die(mysql_error());
mysql_select_db('BAZA') or die(mysql_error());
mysql_query("set names utf8");
?>