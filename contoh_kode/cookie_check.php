<?php
//menulis cookie
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php

//check jika cookie berhasil di tulis maka 
//peintah count($_COOKIE) akan mengahilkan nilai POSITIF atau tidak nol

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
		//tambah peringatan untuk mengaktifkan cookie
		
}
?>

</body>
</html> 