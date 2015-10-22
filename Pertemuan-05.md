# Koneksi dengan server basis data MySQL

Server basis data adalah sebuah aplikasi server yang melayani akses (baca/tulis) data melalui jaringan komputer ataupun lokal komputer.  Pada bagian ini akan dijelaskan cara mengakses (membaca/menulis) data dalam sebuah server basis data menggunakan php. 

Langkah-langkah penting yang harus di lakukan adalah sebagai berikut:

1. Membuat sebuah variabel koneksi (` variabel RESOURCE `), diperlukan alamat server (` LOCALHOST ` ), ` USERNAME `  dan ` PASSWORD ` untuk ijin mengkases server basisdata, dan terakhir adalah nama database (` DATABASE NAME `) yang akan di akses.
2. Mengeksekusi sebuah perintah SQL atau ` QUERY ` menggunakan variabel koneksi pada langkah satu untuk melakukan operasi CRUD (Create, Read, Update, dan Delete)
3. Khusus untuk operasi READ, selanjutnya perlu dilakukan proses pembacaan setiap baris data hasi dari perintah pada langkah ke 2

## Menyiapkan Aplikasi Server (MySQL dan Apache) 

Sebagai server database dalam contoh ini akan digunakan MySQL dari paket XAMPP, pertamakali pastikan bahwa MySQL server dan Apache Web Server sudah dalam keadaan aktif, dengan cara sebagai berikut:

* Jalankan control panel XAMPP, aplikasinya terletak dalam folder XAMPP dengan nama file ` xampp-control.exe `, sehingga ditampilkan windows seperti berikut

![Gambar-5.1](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/xampp.jpeg) 
> Gambar-5.1 Xampp Controller 

* Klik button ` Start ` jika Apache (web server) dan MySQL belum aktif, kolom PID dan PORT masih kosong, sehingga tampak seerpti gambar berikut.

![Gambar-5.2](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/xampp-02.jpeg)
> Gambar-5.2 Apache dan MySQL telah aktif (running), kolom PID dan PORT tidak kosong


## Membuat database dan tabel

Setelah aplikasi server berjalan dengan baik, selanjutnya dapat dilakukan proses pembuatan database dengan menggunakan aplikasi web bernama ` phpMyAdmin `. Terdapat beberapa komponen dalam DATABASE, antara TABEL, STORE PROCEDURE, FUNCTION dan lain-lain, dalam contoh ini akan diberikan contoh membuat TABEL saja, dengan cara sebagai berikut:

* Jalankan aplikasi web browser, buka link  ` http://localhost `, akan dtampilkan halaman web seperti pada gamabr di bawah ini.

![Gambar-5.3 Localhost](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/xampp-03.jpeg)
> Gambar-5.3 Tampilan halaman web LOCALHOST

* Klik menu ` phpMyAdmin ` yang terdapat pada kolom sebelah kiri, jika secutiry belum diakifkan maka tidak akan muncul halaman login (username= 'root' tanpa password), jika muncul halaman login, masukan USERNAME Dan PASSWORD yang telah anda pasang untuk masuk kedalam database. Contoh tampilan awal aplikasi ` phpMyAdmin ` diberikan pada gambar berikut.

![Gambar-5.4](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-01.jpeg)
> Gambar-5.4 Halaman web aplikasi ` phpMyAdmin `

* Selanjutnya adalah pembuatan ` DATABASE `: dapat dilakukan dengan cara klik menu ` Databases ` (lokasi di bar menu atas), setalah itu di bawah label ` Create databse ` masukan nama database (sebaiknya nama database TANPA SPASI)  dan klik button ` Create `.  Jika berhasil maka nama database yang baru akan di tampilkan pada kolo sebelah kiri dalam halaman web. Dalam contoh ini dibuat database dengan nama ` login `, seperti ditampilkan pada gambar di bawah

![Gambar-5.5](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-02-Login.jpeg) 
> Gambar-5.5 Membuat database ` Login `

* Berikutnya adlah membuat tabel dalam database ` Login `, klik database ` Login ` untuk memilih database yang akan kita gunakan untuk membuat sebuah tabel, sehingga tampak seperti gambar di bawah, selanjutnya masukan nama tabel ` users ` dan jumlah kolom (Number of columns) sama dengan 3 (id, username, password) selanjutnya klik button ` Go `

![Gambar-5.6a](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-03.jpeg)
![Gambar-5.6b](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-04.jpeg)
> Gambar-5.6 Membuat tabel ` users ` dalam database ` Login `

* Selanjutnya buatlah nama-nama kolom dan tipe datanya dalam tabel (id (integer, a_i), useranme (varchar 40), password (varchar 132), seperti pada gamabr di bawah dan klik button ` Save `.

![Gambar-5.7a](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-05.jpeg) 
![Gambar-5.7b](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-06.jpeg)
> Gambar-5.7 Membuat kolom tabel 

* Jika pembuatan kolom pada tabel ` Login ` berhasil maka akan di tampilkan nama tabel di sebelah kiri halaman web, klik nama tabel tersebut ` users ` maka akan di tampilkan nama-nama kolom di sebelah kanan nama tabel, seperti pada gamabr di bawah. 

![Gambar-5.8](https://cdn.rawgit.com/handaga/Web-Dinamis/master/images/phpMyAdmin-07.jpeg)
> Gambar-5.8 Tampilan nama kolom pada tabel ` users ` dalam database ` Login `   



