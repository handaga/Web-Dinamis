<?php 

  //delete cookie
	setcookie('USERNAME','',time() - 3600, "/" );
	
	//open login page
  include "cookie_login.php";
?>
