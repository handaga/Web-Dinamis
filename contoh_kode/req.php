<?php
  
	//HTTP Request
	//POST, GET, (PUT, DELETE jarang diakai )
	/*
	if ( !empty($_GET['x']) ) {
		echo 'Nilai x ='. $_GET['x']. "<p>";
	} else {
		echo "Nilai x belum di kirim oleh user";
	}
	*/
	
	if ( !empty( $_REQUEST['pwd']) ) {
		echo "<p><p>Nilai pwd=". $_REQUEST['pwd'] ."<p>";
	}
?>

<form method='POST'>
 username: <input type='text' name='un' /> <br>
 password: <input type='password' name='pwd' /> <br>
 <input type='submit' />
</form>



