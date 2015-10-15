<?php
   
	 function test() {
		 
		 static $x = 10;
		 echo  "Variabel x = $x <br>";
		 $x++;  //post-increment x = x + 1
		 
	 }

		test();
		test();
		test();
		test();


?>