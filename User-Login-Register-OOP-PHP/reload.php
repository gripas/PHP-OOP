<?php
ob_start();
date_default_timezone_set("Europe/Vilnius");


$veiksmas = $_GET['veiksmas']; 
include 'class_user_work.php'; // nuoroda į klasę
$action = new Veiksmas();
// Prisijungti prie sistemos
if($veiksmas == 'prisijungti'){
	$prisijungti = $action->prisijungti();
	if($prisijungti)
		echo $prisijungti;
}

// Sukurti vartotoją 
if($veiksmas == 'issaugoti'){
	$issaugoti = $action->issaugoti();
	if($issaugoti)
		echo $issaugoti;
}

// Atsijungti 
if($veiksmas == 'atsijungti'){
	$atsijungti = $action->atsijungti();
	if($atsijungti)
		echo $atsijungti;
}

ob_end_flush();
?>