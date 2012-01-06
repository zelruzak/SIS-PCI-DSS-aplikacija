<?php
function trenutnaStranica() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
?>
<div id="header_provjera">
    	<a href="provjera.php" <?php if(trenutnaStranica() == "provjera.php")
		{echo 'class="zahtjev_button_trenutni"';} 
		else {echo 'class="zahtjev_button"';}?>> Provjera zahtjeva: </a>
        
        <a href="zahtjev1.php" <?php if(trenutnaStranica() == "zahtjev1.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 1 </a>
        
        <a href="zahtjev2.php"  <?php if(trenutnaStranica() == "zahtjev2.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 2 </a>
        
        <a href="zahtjev3.php"  <?php if(trenutnaStranica() == "zahtjev3.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 3 </a>
        
        <a href="zahtjev4.php"  <?php if(trenutnaStranica() == "zahtjev4.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 4 </a>
        
        <a href="zahtjev5.php"  <?php if(trenutnaStranica() == "zahtjev5.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 5 </a>
        
        <a href="zahtjev6.php"  <?php if(trenutnaStranica() == "zahtjev6.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 6 </a>
        
        <a href="zahtjev7.php"  <?php if(trenutnaStranica() == "zahtjev7.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 7 </a>
        
        <a href="zahtjev8.php"  <?php if(trenutnaStranica() == "zahtjev8.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 8 </a>
        
        <a href="zahtjev9.php"  <?php if(trenutnaStranica() == "zahtjev9.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 9 </a>
        
        <a href="zahtjev10.php"  <?php if(trenutnaStranica() == "zahtjev10.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 10 </a>
        
        <a href="zahtjev11.php"  <?php if(trenutnaStranica() == "zahtjev11.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 11 </a>
        
        <a href="zahtjev12.php"  <?php if(trenutnaStranica() == "zahtjev12.php")
		{echo 'class="menu_zahtjevi_trenutni"';} 
		else {echo 'class="menu_zahtjevi"';}?>> 12 </a>
        
        <a href="rezultat.php"  <?php if(trenutnaStranica() == "rezultat.php")
		{echo 'class="zahtjev_button_trenutni"';} 
		else {echo 'class="zahtjev_button"';}?>> Rezultat </a>
        
		<div class="clear"></div>
</div>