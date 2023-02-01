<?php 
	if(!isset($_SESSION)){
	error_reporting (E_ALL ^ E_NOTICE); 
    session_start();
    }
	if(!isset($connectDB)){ 
	include 'config.php'; 
	}
include 'header.php';
?>

<h2>Registracijos ir prisijungimo sistema</h2>
<ul>
<?php include "navigation.php";?>  
</ul>
 <?php //print_r($_SESSION);
	if($_SESSION==TRUE){
		echo "Sveiki " . $_SESSION['login_acc_user'] . "! &nbsp;";
		echo "<a href='reload.php?veiksmas=atsijungti' >Atsijungti</a>";
	} else {
		echo "<a href='login.php'>Prisijungti</a>";
	}
	?>
	<br/>
	<h3>Viso vartotojų</h3>
	<?php
	$i = 0;
	$qry = $connectDB->query("SELECT * FROM edu_users");
	while($row= $qry->fetch_assoc()): 
	$i=$i+1;
	echo $i . ". ".$row['acc_user']."<br/>"; 
	endwhile; 

 include "footer.php";
 ?>