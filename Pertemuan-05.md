# Koneksi dengan server basis data MySQL

Server basis data adalah sebuah aplikasi server yang melayani akses (baca/tulis) data melalui jaringan komputer ataupun lokal komputer.  Pada bagian ini akan dijelaskan cara mengakses (membaca/menulis) data dalam sebuah server basis data menggunakan php. 

Langkah-langkah penting yang harus di lakukan adalah sebagai berikut:

1. Membuat sebuah variabel koneksi (` variabel RESOURCE `), diperlukan alamat server (` LOCALHOST ` ), ` USERNAME `  dan ` PASSWORD ` untuk ijin mengkases server basisdata, dan terakhir adalah nama database (` DATABASE NAME `) yang akan di akses.
2. Mengeksekusi sebuah perintah SQL atau ` QUERY ` menggunakan variabel koneksi pada langkah satu untuk melakukan operasi CRUD (Create, Read, Update, dan Delete)
3. Khusus untuk operasi READ, selanjutnya perlu dilakukan proses pembacaan setiap baris data hasi dari perintah pada langkah ke 2

> Lihat file ` seting-server-database.md ` untuk mempersiapkan server basis data

