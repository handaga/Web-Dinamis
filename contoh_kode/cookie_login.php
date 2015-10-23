<?php 
/* LOGIN with COOKIE  */

function show_login_form() {
?>

<h1>Login Form</h1> 
<form action="" method="POST">
	Username: <input type="text" name="username" /><br>
	Password: <input type="password" name="password" /> <br><br>
	<input type="submit" />
</form>		
	
<?php	
}


// CHeck the COOKIE 
if ( isset($_COOKIE['USERNAME']) ) {
	//user is already login 
	// Extend the expire date of COOKIE
	setcookie('USERANME', $_COOKIE['USERNAME'], 
	time() + 86400, "/");
	//Open secure web page
	include "start.php";
	
	
} else {
	// the user is not login yet
	
  if (  ( isset($_POST['username']) )  && 
	      ( isset($_POST['password']) ) ) {
					
					$username	= $_POST['username'];
					$password = sha1( $_POST['password'] );
					
					 echo "username: " . $username . "<br>";
					 echo "password: " . $password . "<br>";
					 
					 // user validation is here 
					 // DATABASE CONNECTION
					 $CONN = mysqli_connect('LOCALHOST', 'root',
					 '','login');
					 
					 if ($CONN) {
						  //read the table
							$SQL = "SELECT username,password from login
							  where username='$username' AND password='$password'";
							$TABLE = mysqli_query($CONN, $SQL);	
							if ( $TABLE->num_rows > 0 ) {  //username is valid
                  //create COOKIE
								   // forexample user is valid
										// here is code to save cookie
									setcookie('USERNAME', $username, time() + 86400, "/");
									include "start.php";
							
							}
					 } else {
						  die( "database server is off / connection fail");
							//stop to proceed php code here
					 }
					 
	} else { 
	  // show login form	
		show_login_form();
	}
}




?>
