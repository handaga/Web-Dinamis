<?php

  function show_login_form() {
?>	
		
<h1>Login form</h1>
<form action='' method="POST">
  Username: <INPUT type="text" name="username" /> <br>
  Password: <INPUT type="password" name="password" /> <br>
  <input type="submit" />	
</form>
		
<?php	
	}


   /*
	   1. Periksa apakah 'username' (nama cookie) sudah ada dalam COOKIE
	 
	 */
  if ( isset($_COOKIE['username']) ) {
		// tampilkan halaman web-sedure
	} else {
		// belum ada cookie
		// periksa apakah username & password sudah di submit
		if ( (isset($_POST['username']))  && 
		     (isset($_POST['password'])) )  {
						echo " Username dan Password sudah di submit ";
						//proses validasi user					
						
						//koneksi dengan database
						$CONN = mysqli_connect('LOCALHOST','root','Jawad@Mashi123','Login');
						
						if ($CONN) {   // apakah koneksi berhasil
							
								$username = $_POST['username'];
								$password = sha1( $_POST['password'] );
						
								//membuka tabel users
								$SQL = "select username, password form users
								        where username='$username' and 
												password='$password'";
								$TABLE = mysqli_query($CONN, $SQL );				
						    if ($TABLE->num_rows > 0) {
									
								}
						
						
						} else {
							 die( "Server database tidak bisa dihubungi");
							 // STOP proses di sini
						}
						
						
						
				 } else {
						show_login_form();
				 }
	}


?>
