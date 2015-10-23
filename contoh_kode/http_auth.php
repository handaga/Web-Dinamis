<?php
//is user already submit username & password
if ( isset($_SERVER['PHP_AUTH_USER']) &&
		 isset($_SERVER['PHP_AUTH_PW']))
{
	echo "Username: " . $_SERVER['PHP_AUTH_USER'] .
			 "Password: " . $_SERVER['PHP_AUTH_PW'];
	
	// here is code to user validation
			 
} else {
    
		// show the browser LOGIN FORM
		header('WWW-Authenticate: Basic realm="Restricted Section"');
		header('HTTP/1.0 401 Unauthorized');
		
		die("Please enter your username and password");
}
?>
