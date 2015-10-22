# Koneksi dengan server basis data MySQL

Server basis data adalah sebuah aplikasi server yang melayani akses (baca/tulis) data melalui jaringan komputer ataupun lokal komputer.  Pada bagian ini akan dijelaskan cara mengakses (membaca/menulis) data dalam sebuah server basis data menggunakan php. 

Langkah-langkah penting yang harus di lakukan adalah sebagai berikut:

1. Membuat sebuah variabel koneksi (` variabel RESOURCE `), diperlukan alamat server (` LOCALHOST ` ), ` USERNAME `  dan ` PASSWORD ` untuk ijin mengkases server basisdata, dan terakhir adalah nama database (` DATABASE NAME `) yang akan di akses.
2. Mengeksekusi sebuah perintah SQL atau ` QUERY ` menggunakan variabel koneksi pada langkah satu untuk melakukan operasi CRUD (Create, Read, Update, dan Delete)
3. Khusus untuk operasi READ, selanjutnya perlu dilakukan proses pembacaan setiap baris data hasi dari perintah pada langkah ke 2

> Lihat file ` seting-server-database.md ` untuk mempersiapkan server basis data

Dengan menggunakan petunjuk seting-server-basistada dalam file [seting-server-basisdata.md](https://github.com/handaga/Web-Dinamis/blob/master/setting-server-database.md) maka untuk membuat koneksi dengan server database dapat dilakukan dengan perintah seperti berikut:

    <?php
        $conn = mysqli_connect('localhost','root','','login');
        if ($conn) {
            //proses selanjutnya di sini
        } else {
            echo "server database tidak dapat dihubungi";
        }
    ?>
    
Pada contoh kode di atas variabel ` $conn ` adalah sebuah variabel tipe RESOURCE yang selanjutnya dapat digunakan untuk proses baca/tulis dengan serder databse. ` $conn ` akan bernilai ` TRUE ` jika koneksi dengan server database berhasil di buat. 
    
# Membaca Tabel

Setelah koneksi berhasil dibuat selanjutnya adalah membaca tabel yang adal database dengan menggunakan perintah SQL (`  QUERY ` ), contoh untuk membaca tabel ` Login ` perintahnya adalah sebagai berikut:

    ` Select * from Login `  //membaca semua kolom
    ` select username, password from login`    //hanya membaca kolom username dan password

dengan menggunakan php, contoh kode untuk membaca tabel adalah sebagai berikut:

    <?php 
        $conn = mysqli_connect('localhost','root','','login');
        if ($conn) {
        
            //membaca tabel dengan perintah SQL atau QUERY
            $result = mysqli_query($conn, "select username, password from login");
            if ($result) {
                //membaca baris data dalam trabel di sini
            }
            
        } else {
            echo "server database tidak dapat dihubungi";
        }
    ?>


selanjutnya untuk membaca baris-baris data dalam tabel, dapat dilakukan dengan perintah ` mysqli_fetch_assoc() `, seperti pada contoh program php berikut:

    <?php 
        $conn = mysqli_connect('localhost','root','','login');
        if ($conn) {
        
            //membaca tabel dengan perintah SQL atau QUERY
            $result = mysqli_query($conn, "select username, password from login");
            
            if (mysqli_num_rows($result) > 0) {  //jika juumlah baris data lebih dari 0 / ada datanya
                //tampilkan semua data
                while ($r = mysqli_fetch_assoc( $result ) {
                    echo "username: ".$r['username'].", password: ". $r['password']."<br>";
                }
            }
            
        } else {
            echo "server database tidak dapat dihubungi";
        }
    ?>

