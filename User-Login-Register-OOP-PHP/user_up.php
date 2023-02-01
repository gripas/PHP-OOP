<?php 
	if(!isset($_SESSION)){
      session_start();
    }
	if(!isset($connectDB)){ 
	include 'config.php';
	}
	$laikas = date("Y-m-d h:i:s");
	include 'header.php';
?>
    <h2>Registracijos sistema</h2>
	<ul>
	<?php include "navigation.php";?>  
	</ul>
	  <form  action="" id="up-form">
	  <label for="acc_user">Acc Vardas</label><br/>
	  <input type="text" name="acc_user" required /><br/>
	  <label for="first_name" >Vardas</label><br/>
	  <input type="text" name="first_name" required /><br/>
	  <label for="last_name" >Pavardė</label><br/>
	  <input type="text" name="last_name" required /><br/>
	  <label for="email" >El. paštas</label><br/>
	  <input type="text" name="email" required /><br/>
	  <label for="acc_password" >Slaptažodis</label><br/>
	  <input type="password" name="acc_password" required /><br/>
	  <input type="hidden" name="level" value="1"><br>
	  <input type="hidden" name="created" value="<?php print $laikas;?>"><br>
	  <button>Užregistruoti</button>
	  </form>		

<?php include "footer.php";?>
<script type="text/JavaScript">
	$('#up-form').submit(function(e){
		e.preventDefault()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'reload.php?veiksmas=issaugoti',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1 ){
				Swal.fire({
				  position: 'top-end',
				  icon: 'success',
				  title: 'Įrašas sėkmingai išsaugotas',
				  showConfirmButton: false,
				  timer: 1500
				});
					setTimeout(function(){
					location.href ='index.php';
					},2000);
				} else if(resp == 2){
					$('#up-form').prepend('<div class="alert alert-danger">Toks el. paštas jau yra užimtas.</div>');
				}else{
					$('#up-form').prepend('<div class="alert alert-danger">Neveikia, .</div>');
					
				}		
			}
		});
	});
</script>
