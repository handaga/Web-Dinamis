+<!
doctype html>
<html>
<head>
</head>
<body>
<?php

session_start();

function check_username($un, $pwd) {
	/*
	//misal diperoleh data berikut dari tabel database 
	$USERNAME = 'student';
	//$PASSWORD = '123456';
	$SECURE_PASSWORD = sha1('123456');
	*/
	
	//koneksi dengan database  //HOSTNAME, USERNAME, PASSWORD, DATABASE
	//$conn = variabel resource
	$conn = mysqli_connect('localhost','root','Jawad@Mahdi123','login');

   //membaca tabel dari server	
	$result = mysqli_query($conn, 'select username, password from users');

	if ($result) {
		//membaca baris pertama dari tabel users
		$r = mysqli_fetch_assoc($result);		
		return ( ($r['username'] == $un ) && ($r['password'] == sha1($pwd) ) );
		
	} else {
		echo " DATABASE tidak bisa di hubungi "; 
		return false;
	}
	
}
	


if ( (isset($_POST['un'])) && (isset($_POST['pwd'])) ) {
	 //di sini program membaca database 
	 echo "<h3>check username & password dengan basisdata</h3>";
	 $username = $_POST['un'];
	 $password = $_POST['pwd'];

    if ( check_username($username, $password)) { 
	    echo "username & password is valid";
			// disini program untuk menyimpan COOKIE / atau SESSION		
			$_SESSION['username'] = $username;
			// cookie
			setcookie('user',$username,time() + 86400, "/");
			
	  } else {
		  echo "username atau password ada yang salah";
	  }

	 
} else {
	echo "<h1>Silahkan Login</h2>";	
	echo '<form action="" method="POST">';
  echo 'Username : <input type="text" name="un" /> <br>';
  echo 'Password : <input type="password" name="pwd" /> <br>';
  echo '<input type="submit" />';
  echo '</form>';
	
}
  
?>

<!--
<form action='' method="POST">
 Username : <input type="text" name="un" /> <br>
 Password : <input type="password" name="pwd" /> <br>
 <input type="submit" />
</form>
--> 

</body>
</html>

