<?php
$cookie_name = "user"; //nama variabel dalam cookie
$cookie_value = "mahasiswa"; //Nilai variable cookiee
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

/*
  perintah untuk menulis Cookie
	setcookie( [Nama Variabel], [Isi variabel], 
             [Masa berlaku dalam detik sejak sekarang], [lokasi dokumen aplikasi web]
*/

?>

<html>
<body>

<?php
//untuk membaca cookie dapat digunakan
//variabel global $_COOKIE["NAMA_VARIABEL"];


//apakah dalam web browser ada cookie namanya "user"
if ( !isset($_COOKIE[$cookie_name]) ) { 
    echo "Nama cookie '" . $cookie_name . "' is not set! / belum di tulis";
} else {
    echo "Nama cookie '" . $cookie_name . "' is set!<br>";
    echo "Isi cookie: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> 