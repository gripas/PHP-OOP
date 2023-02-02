<?php
//Jungimasis į Duomenų bazę / connection to DataBase
include "config.php";
	
	$jungtis = new PDO("mysql:host=$adresas;dbname=$database", $useris, $passw);
	$jungtis->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	
?>