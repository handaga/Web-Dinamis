# Variabel 

Variabel adalah sesuatu yang dapat digunakan untuk menyimpan data, yang nilainya dapat ditentukan kemudian.  Kadang disebut IDENTIFIER.

Beberapa aturan tentang variabel dalam php

1. Semua variabel berawal dengan tanda `dollar ($)`.
2. Nilai variabel ditentukan oleh data (nilai) yang TERKAHIR di-isikan,
3. Untuk mengisi nilai sebuah variabel digunakan tanda SAMA-DENGAN `(=)`, variabel yang akan diisi diletakkan di sebelah kiri. contoh ` $A = 12 `;
4. Variabel boleh, tapi tidak perlu, dideklarasikan dulu sebelum proses pengisian (assigment).
5. Tipe data sebuah variabel tergantung jenis data yang diisikan terakhir.
6. Variabel dapat digunakan sebelum diisi dengan sebuah data.
7. variabel dalam php akan berubah tipe datanya secara otomatis sesusai dengan jenis data yang diisikan.

Terdapat  8 jenis data dalam PHP

1. ` INTEGER `: untuk menyimpan bilangan BULAT
2. ` DOUBLE `: untuk menyimpan bilangan pecahan (` 3.1415 `) 
3. ` BOOLEAN `: hanya memiliki DUA nilai yaitu, ` TRUE ` and ` FALSE ` ( ` 0 ` atau ` NULL `)
4. ` NULL `:  data jenis khusus, variabel bernilai NULL berarti TANPA ISI (belum pernah diisi), kadang ditulis dengan huruf kecil ` null `.
5. ` STRING `: adalah kumpulan dari huruf, contoh ` "Selamat Belajar PHP" `.
6. ` ARRAY `: tipe varaiabel yang memiliki nilai lebih dari SATU, bisa berbentuk DERET (LARIK), 2D, atau 3D. Indeks selalu berawal dari ` '0' `. Contoh   ` $A = array(1,2,3,4,5)` ,  ` $A[0] = 1 `;
7. ` OBJECT `: digunakan dalam pemrograman berorientasi obyek (OOP), sebuah object dapat di deklarasikan dengan menggunakan ` 'class' `
8. ` RESOURCES `: varaibel khusus yang digunakan untuk menyimpan sebuah REFERENSI yang berkaitan dengan resource yang berasal dari luar (eksternal), contoh DATABASE CONNECTION.

## Membuat variabel

In PHP, a variable starts with the $ sign, followed by the name of the variable:
Dalam PHP, sebuah variabel harus dimulai dengan tanda ` $ `, dan diikuti dengan nama variabel:
Contoh:

    <?php
      $txt = "Hello world!";
      $x = 5;
      $y = 10.5;
    ?> 
    
## Penamaan variable PHP

Nama variabel boleh singkat hanya terdiri atas satu huruf, seperti ` x ` dan ` y ` atau lebih menjelaskan fungsinya seperti ` umur `, ` jenis_mobil `, dan ` total_luas `.

Aturan untuk memberi nama variabel dalam PHP:

  * Harus berawal dengan ` $ `
  * Setelah tanda ` $ ` diikuti dengan HURUF atau UNDER_SCORE (Garis bawah) tidak boleh angka
  * Nama hanya terdiri atas alpha-numeric dan under_score saja (` a-Z `, ` 0-9 `, and ` _ ` )
  * Nama variabel bersifat ` case-sensitive `

