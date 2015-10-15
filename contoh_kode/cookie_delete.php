<?php
// Menghapus COOKIE
// Menulis nama cookie yang akan dihapus
// mengisi nilainya dengan KOSONG  ""
// mengatur masa aktif menjadi kurang dari jumlah detik saat ini

$cookie_name = "user"; 
setcookie($cookie_name, "", time() - 3600, "/");
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html> 