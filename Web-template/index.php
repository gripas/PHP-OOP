<?php if(!isset($_SESSION)){
	error_reporting (E_ALL ^ E_NOTICE); 
    session_start();
include "connect.php";
}
include 'layout/header.php';
include 'layout/content.php';

include 'layout/footer.php';
?>