<?php // Jakaitis Darius
      // Objektinio programavimo užduotis
    
	$konstanta = null;
	$pabaiga = null;
	$pradzia = null; 

if(isset($_POST['submit'])){ 
	$konstanta = $_POST['konstanta'];// Duomenys įvesti iš lokalaus serverio puslapio
	$pabaiga = $_POST['pabaiga'];// Duomenys įvesti iš lokalaus serverio puslapio
	$pradzia = $_POST['pradzia'];// Duomenys įvesti iš lokalaus serverio puslapio
}	
	$arit = new Duomenys($pradzia, $pabaiga, $konstanta);// Iškviečiama klasė
	
 class Aritmetika { // Klasė
 
   public $pirmas;    // kintamieji
   public $antras;    // kintamieji
   public $konstanta; // kintamieji
    
	function __construct($pirmas, $antras, $konstanta) {
    $this->konstanta = $konstanta; 
    $this->pirmas = $pirmas;  
    $this->antras = $antras; 
    }
     function gr_pirmas(){ // gražina įvestą pirmą skaičių
	  return $this->pirmas;
    }   
	 function gr_antras(){ // gražina įvestą antrą skaičių
	   return $this->antras;
    }	
	 function gr_konstanta(){ // gražina įvestą konstantą
	   return $this->konstanta;
    }
     function gr_skaiciavimas(){ // gražina skaičiavimą
	 
	   if($this->konstanta > ""):// if sąlyga
		 $sk = 0; 
		 $suma = 0; // suma sudėjus gautus iš aritmetinės progresijos
	   for($x = $this->pirmas; $x <= $this->antras; $x++):// for ciklas
		 $sk += $this->konstanta;
		 print (" ". $sk .""); 
		 $suma +=$sk;// skaičius aritmetinėje progresijoje
	   endfor; 
	     $viso = ($this->antras - $this->pirmas) + 1;
		 $ats = "<p style='color: green'>   Suma = $suma; 
		 <br>Viso skaičių: $viso </p>";
		 return $ats; // gražinamas atsakymas
		 else:
		 return 0;
	    endif;
    }
	function __destruct() { //destruct funkcija automatiškai iškviečiama scenarijaus pabaigoje
		print "<h2><b>Programą sukūrė Darius Jakaitis</b></h2><br>
		<p>Šiame PHP OOP darbe panaudota: 2 Klasės ir ojektai klasėse,<br>
		klasės paveldėjimas, konstruktorius, destruktorius ir taip pat <br>
		html forma, css stiliaus sintaksės</p>"; 
    }
 }
 class Duomenys extends Aritmetika{ // Paveldi funkcijas ir duomenis iš Aritmetika klasės
	public $antraste;
	
	function title(){
		 $antraste = "+ Aritmetinė progresija +";
		 return $antraste;
	 }
	 public function skaiciavimas(){
		 print $this->gr_skaiciavimas();
	 }
 }
?>	
<!-- HTML Pateikties forma interaktyviam darbui iš host puslapio-->
<!-- action, paspaudus <pateikti> nukreipe į pasirinktą dokumentą šiuo atveju skaiciutuvas.php -->
	<form  method="POST" action="skaiciutuvas.php" > 
       <fieldset  style="margin: 20px; width: 195px;">
	   <legend><?php print $arit->title();?></legend>
	   <p style="white-space: nowrap;">Konstanta:
			<input title="Įrašykite konstantą" type="text" size="3" name="konstanta"/>
	   </p>
	   <p style="white-space: nowrap;">Pradžios skaičius:
			<input title="Įrašykite skaičių" type="text" size="3" name="pradzia"/>	
	   </p>
	   <p style="white-space: nowrap;">Pabaigos skaičius:
			<input title="Įrašykite skaičių" type="text" size="3" name="pabaiga"/>
	   </p>
	   <p style="white-space: nowrap;"> 
			<button type="submit" name="submit" >Pateikti ir skaičiuoti</button>
	   </p>
     <br>
   
<?php if($arit->gr_konstanta() == "" || $arit->gr_pirmas() == "" || $arit->gr_antras()==""){
		print "<p style='color: blue'>Šiuo metu dar nėra duomenų<p>";
		}else{
			print $arit->skaiciavimas();
	        print " Skaičių konstanta: " . $arit->gr_konstanta();
	        print "<br>Skaičiai nuo  " . $arit->gr_pirmas()
	        ." iki " . $arit->gr_antras();
			}
?>   
        </fieldset>
    </form>
