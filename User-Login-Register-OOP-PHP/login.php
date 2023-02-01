<?php 
	if(!isset($_SESSION)){
      session_start();
    }
	if(!isset($connectDB)){ 
	include 'config.php';
	}
	include 'header.php';
?>

<h2>Prisijungimo sistema</h2>
<ul>
<?php include "navigation.php";?>  
</ul>
	<form id="prisijungti-form">	
	<p> Vartotojas</p><br/>
  	<label for="acc_user">Prisijungimo Vardas</label><br/>
    <input type="text" name="acc_user"><br/>
  	<label for="acc_password">Slaptažodis</label><br/>
  	<input type="password" name="acc_password"><br/>
	<br/>
    <button >Prisijungti </button>
  	</form>
	
<?php include "footer.php";?>
<script type="text/JavaScript">

 $('#prisijungti-form').submit(function(e){
		e.preventDefault()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'reload.php?veiksmas=prisijungti',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				if(resp == 1 ){
			    Swal.fire({
				  position: 'top-end',
				  icon: 'success',
				  title: 'Puiku!',
				  showConfirmButton: false,
				  timer: 1500
				});
					setTimeout(function(){
					location.href ='index.php';
					},2000);
				} else if(resp == 2){
					location.href ='login.php';
				}else{
					$('#prisijungti-form').prepend('<div class="alert alert-danger">Vartotojo Vardas arba slaptažodis yra nekorektiški.</div>');
					
				}		
			}
		});
	});
	
</script>
