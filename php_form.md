# Kode php untuk mengolah data yang berasal dari html form

Contoh di bawah ini menampilkan form HTML sederhana dengan input terdiri atas dua field dan sebuah tombol submit.

    <html>
    <body>
    
    <form action="welcome.php" method="post">
      Nama: <input type="text" name="nama"><br>
      E-mail: <input type="text" name="email"><br>
      <input type="submit">
    </form>
    
    </body>
    </html>

Ketika user sudah mengisi form di atas dan menekan tombol (klik)  `submit`, data di dalam form akan dikirim ke server dan selanjutnya diproses oleh file php yang bernama `welcome.php`.  form dikirim ke server dengan menggunakan method `POST`. Untuk membaca data dari form dapat digunakan `$_POST[]` dan menampilkan datanya dengan statement `echo` seperti pada contoh di bawah ini. 

    <html>
    <body>
    
    Selamat datang <?php echo $_POST["name"]; ?><br>
    email anda adalah: <?php echo $_POST["email"]; ?>
    
    </body>
    </html> 

Ouptut dari program di atas tamp[ak seperti tampilan di bawah ini 

    Selamat datang fulan
    email anda adalah: fulan@gmail.com
    
## Perbandingan antara `GET` dan `POST`

Keduanya membuat variabel array jenis (associative array) , yaitu ` array(key=>value, key2=>value2, ...) `, Array ini menyimpan data dalam bentuk berpasangan `key dan value` dimana `key` berasal dari `nama form (name)` dan `value` berasal dari data yang dimasukan user.

Method GET diproses dengan variabel global ` $_GET[] ` sedangkan method `POST` diproses dengan variabel global `$_POST[]`, kedua method dapat diproses dengan variabel global `$_REQUEST[]`.



