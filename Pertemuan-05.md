# Koneksi dengan server basis data MySQL

Server basis data adalah sebuah aplikasi server yang melayani akses (baca/tulis) data melalui jaringan komputer ataupun lokal komputer.  Pada bagian ini akan dijelaskan cara mengakses (membaca/menulis) data dalam sebuah server basis data menggunakan php. 

Langkah-langkah penting yang harus di lakukan adalah sebagai berikut:

1. Membuat sebuah variabel koneksi (` variabel RESOURCE `), diperlukan alamat server (` LOCALHOST ` ), ` USERNAME `  dan ` PASSWORD ` untuk ijin mengkases server basisdata, dan terakhir adalah nama database (` DATABASE NAME `) yang akan di akses.
2. Mengeksekusi sebuah perintah SQL atau ` QUERY ` menggunakan variabel koneksi pada langkah satu untuk melakukan operasi CRUD (Create, Read, Update, dan Delete)
3. Khusus untuk operasi READ, selanjutnya perlu dilakukan proses pembacaan setiap baris data hasi dari perintah pada langkah ke 2

## Menyiapkan Aplikasi Server (MySQL dan Apache) 

Sebagai server database dalam contoh ini akan digunakan MySQL dari paket XAMPP, pertamakali pastikan bahwa MySQL server dan Apache Web Server sudah dalam keadaan aktif, dengan cara sebagai berikut:

* Jalankan control panel XAMPP, aplikasinya terletak dalam folder XAMPP dengan nama file ` xampp-control.exe `, sehingga ditampilkan windows seperti berikut

![Gambar-5.1]() 
> Gambar-5.1 Xampp Controller 

* Klik button ` Start ` jika Apache (web server) dan MySQL belum aktif, kolom PID dan PORT masih kosong, sehingga tampak seerpti gambar berikut.

![Gambar-5.2]()
> Gambar-5.2 Apache dan MySQL telah aktif (running), kolom PID dan PORT tidak kosong


## Membuat database dan tabel

Setelah aplikasi server berjalan dengan baik, selanjutnya dapat dilakukan proses pembuatan database dengan menggunakan aplikasi web bernama ` phpMyAdmin `. Terdapat beberapa komponen dalam DATABASE, antara TABEL, STORE PROCEDURE, FUNCTION dan lain-lain, dalam contoh ini akan diberikan contoh membuat TABEL saja, dengan cara sebagai berikut:

1. Jalankan aplikasi web browser, buka link  http://localhost, akan dtampilkan halaman web seperti pada gamabr di bawah ini.
2. Klik menu ` phpMyAdmin ` yang terdapat pada kolom sebelah kiri, jika secutiry belum diakifkan maka tidak akan muncul halaman login (username= 'root' tanpa password), jika muncul halaman login, masukan USERNAME Dan PASSWORD yang telah anda pasang untuk masuk kedalam database. Contoh tampilan awal aplikasi ` phpMyAdmin ` diberikan pada gambar berikut.
3. 
