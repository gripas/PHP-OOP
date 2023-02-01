<?php  session_start();

Class Veiksmas {
	private $DB;

	public function __construct() {
		ob_start();
   	include 'config.php';
    
    $this->DB = $connectDB;
	}
	function __destruct() {
	    $this->DB->close();
	    ob_end_flush();
	}

	function prisijungti(){
		extract($_POST);
			$select = $this->DB->query("SELECT *,concat(acc_user,' ',acc_password) as name FROM edu_users where acc_user = '".$acc_user."' and acc_password = '".sha1($acc_password)."' ");
		if($select->num_rows > 0){
			foreach ($select->fetch_array() as $raktas => $verte) {
				if($raktas != 'acc_password' && !is_numeric($raktas))
					$_SESSION['login_'.$raktas] = $verte;
			}
			return 1;
		}
	}
	
	function atsijungti(){
		session_destroy();
		foreach ($_SESSION as $raktas => $verte) {
			unset($_SESSION[$raktas]);
			session_destroy();
		}
		header("location:login.php");
	}
	
	function issaugoti(){
		extract($_POST);
		$duomenys = "";
		foreach($_POST as $raktas => $verte){
				if($raktas =='acc_password'){
					if(empty($verte))
						continue;
					$verte = sha1($verte);
				}
				if(empty($duomenys)){
					$duomenys .= " $raktas='$verte' ";
				}else{
					$duomenys .= ", $raktas='$verte' ";
				}
		}

		$check = $this->DB->query("SELECT * FROM edu_users where email ='$email' ")->num_rows;
		if($check > 0){
			return 2;
			exit;
		}

		if(empty($id)){
			$save = $this->DB->query("INSERT INTO edu_users set $duomenys");

		}
		if($save){
			if(empty($id))
				$id = $this->DB->insert_id;
			foreach ($_POST as $raktas => $verte) {
				if(!in_array($raktas, array('id','acc_password')) && !is_numeric($raktas))
					$_SESSION['login_'.$raktas] = $verte;
			}
					$_SESSION['login_id'] = $id;
			return 1;
		}
	}
} 
