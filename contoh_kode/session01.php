<?php
// Start the session
// perintah ini harus ada di setiap file php
// yang kan menggunakan variabel SESSION
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "green";
$_SESSION["nama"] = "fulan";
echo "Session telah di Dibuat. <br>";
echo "variabel session adalah : <br>";
//mencetak semua variabel dalam session saat ini
print_r($_SESSION);




?>

</body>
</html>