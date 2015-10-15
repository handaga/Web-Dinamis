<?php 

 // Contoh variabel global
 // yaitu semua variabel yang dibuat 
 // di luar fungsi
 $N = 12;  
 echo "Variabel GLOBAL";
 echo "<hr>";
 
 function test() {   
		//global $N; //membaca variabel global
		$z = 2 * $GLOBALS['N']; //membaca variabel global
		echo "variabel z = $z <br>";
  } 
 
 test();
 
 
?>