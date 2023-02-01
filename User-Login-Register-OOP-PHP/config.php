<?php 
$host = "localhost";
$username = "root";
$password = ""; // Jūsų duomenų bazės slaptažodis / Your Database password
$database = "educ";
$connectDB= new mysqli($host,$username,$password,$database)or die("Nėra tinkamos jungties su Mysql".mysqli_error($connectDB));
?>
