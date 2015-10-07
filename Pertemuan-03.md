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

## String

String berupa deretan karakter (huruf/angka/simbol), contoh ` Selamat Belajar `. Sebuah string dapat berupa teks apapun yang ditulis di antara tanda petik, baik petik tunggal ` '...' ` maupun tanda petik ganda ` " .... " `. Contoh:

        <?php
            $x = "Selamat Belajar!";
            $y = 'Selamat Belajar!';
            
            echo $x;
            echo "<br>";
            echo $y;
        ?>

## Integer

Integer adalah angka bulat (tanpa pecahan), dapt digunakan untuk menyimpan angka mulai dari ` -2,147,483,648 ` sampai dengan ` +2,147,483,647 `. catatan: ` tanda koma ' bukan berarti pecahan.

Aturan:

* Paling sedikit mengandung satu angka (` 0-9 `)
* Tidak boleh mengandung tanda koma atau spasi.
* Tidak memiliki tanda koma seperti yang tanda koma dalam angka pecahan
* Dapat bernilai NEGATIF atau POSITIF
* Dapat ditulis dalam TIGA format: DECIMAL (basis-10), Hexadesimal (basis-16, dengan awalan ` 0x `), atau OCTAL (basis-9, diawali dengan ` 0 `).

Contoh:

        <?php
            $x = 5985;
            var_dump($x);
        ?>

## Float

Float merupakan sebuah angka pecahan (sering disebut sebagai floating-point), kadang juga ditulis dalam bentuk eksponensial (scientific-notation, `E-01` = ` 0.1 ` atau `E+01` = ` 10 `). Dalam contoh program berikut ini variabel ` $x ` digunakan untuk menyimpan angka p[ecahan, fungsi ` var_dump() ` dalam php digunakan untuk menampilkan jenis data dan nilai dari sebuah variabel.

        <?php
            $x = 10.365;
            var_dump($x);
        ?> 

## Boolean 

Boolean adalah sebuah angka biner yang hanya memiliki dua nilai yaitu TRUE dan FALSE

        <?php 
            $x = true;
            $y = false;
        <?

Boolean sering digunakan dalam sebuah kondisi sebagai hasil evaluasi sebuah ekspresi. 

## Array

Array dapat digunakan untuk menyimpan beberapa nilai dalam sebuah variabel. Dalam contoh di bawah ini  variabel ` $car ` adalah sebuah ` array ` untuk menyimpan beberapa jenis mobil.

        <?php
            $cars = array("Volvo","BMW","Toyota");
            var_dump($cars);
        ?>

## Object 

Object adalah tipe data yang dapat digunakan untuk menyimpan data dan informasi, dan sekaligus menyimpan prosedur untuk mengolah data. Dalam PHP tipe data ` object ` harus dideklarasikan dengan menggunakan katakunci ` class `, class dapat mengandung properties (data) dan juga methods (fungsi/prosedur)

Contoh:

        <?php
            class Car {
                function Car() {
                    $this->model = "VW";
                }
            }
            
            // create an object
            $herbie = new Car();
            
            // show object properties
            echo $herbie->model;
        ?> 

## NULL

NULL adalah tipe data spesial yang hanya memiliki satu nilai yaitu ` NULL `, Variabel yang diisi (assign) dengan NULL berarti belum memiliki data apapun. Variabel yang dideklarasikan tanpa diberi nilai maka akan diberi nilai ` NULL `. Sebuah variabel dapat dikosongkan dengan cara mengisi dengan ` NULL `. Contoh:

        <?php
            $x = "Hello world!";
            $x = null;
            var_dump($x);
        ?> 

## Resource 

Resource digunakan untuk menyimpan referensi dari sebuah fungsi atau sumber daya eksternal seperti  ` koneksi dengan server basis data `. Dalam contoh berikut variabel ` $conn ` adalah sebuah ` resource ` untuk akses data dari databae server.

        <?php
            $servername = "localhost";
            $username = "username";
            $password = "password";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
        ?> 

# Statement ` echo ` dan ` print `

Terdapat dua cara untuk menampilkan data, yaitu ` echo ` dan ` print `.  Pada dasarnya memiliki fungsi yang hampir sama, perbedaan terletak pada ` return value `. ` echo ` tidak memiliki ` return ` sedangkat ` print ` memiliki ` return value ` sama dengan ` 1 `.  Contoh menampilkan teks dan variabel dengan menggunakan ` echo ` dan ` print `.

                <?php
                        echo "<h2>PHP is Fun!</h2>";
                        echo "Hello world!<br>";
                        echo "I'm about to learn PHP!<br>";
                        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
                ?> 
                
                <?php
                        $txt1 = "Learn PHP";
                        $txt2 = "W3Schools.com";
                        $x = 5;
                        $y = 4;
                        
                        echo "<h2>$txt1</h2>";
                        echo "Study PHP at $txt2<br>";
                        echo $x + $y;
                ?> 
                
                <?php
                        print "<h2>PHP is Fun!</h2>";
                        print "Hello world!<br>";
                        print "I'm about to learn PHP!";
                ?> 
                
                
                <?php
                        $txt1 = "Learn PHP";
                        $txt2 = "W3Schools.com";
                        $x = 5;
                        $y = 4;
                        
                        print "<h2>$txt1</h2>";
                        print "Study PHP at $txt2<br>";
                        print $x + $y;
                ?> 

# Membuat variabel

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

## variabel Output

statement ` echo ` sering digunakan untuk menampilkan data di layar (halaman web), berikut ini adalah contoh menampilkan teks dan variabel di layar:

        <?php
            $txt = "W3Schools.com";
            echo "I love $txt!";
        ?> 

Output yang sama dapat di hasilkan dari program berikut ini: 

        <?php
            $txt = "W3Schools.com";
            echo "I love " . $txt . "!";
        ?> 

Contoh berikut ini akan menampilkan hasil penjumlahan dari dua buah variabel

        <?php
            $x = 5;
            $y = 4;
            echo $x + $y;
        ?>

## Variabel dalam PHP dapat digunakan untuk menyimpan tipe data apa saja

Pada contoh di atas, tidak ada perintah yang mengatakan pada PHP terkait tipe data tertentu yang akan disimpan dalam  variabel, PHP secara automatis mengubah tipe data, sesuai dengan data yang diisikan pada variabel. 

## SCOPE variabel

Dalam PHP variabel dapat dideklarasikan di mana saja, terdapat 3 scope variabel yaitu 

* lokal
* GLobal
* Statik

Sebuah variabel yang dideklarasikan di luar sebuah fungsi bersifat ` GLOBAL ` dan hanya dapat diakses dari luar fungsi, seperti pada contoh variabel ` $x ` pada program berikut ini: 

        <?php
            $x = 5; // global scope
            
            function myTest() {
                // memanggil variabel $x dalam blok fungsi ini akan menyebabkan error 
                echo "<p>Variable x di dalam blok fungsi adalah: $x</p>";
            }
            myTest();
            
            echo "<p>Variable x di luar blok fungsi: $x</p>";
        ?> 

Variable yang dideklarasikan di dalam fungsi bersifat ` LOKAL `.

        <?php
            function myTest() {
                $x = 5; // local scope
                echo "<p>Variable x di dalam fungsi adalah: $x</p>";
            }
            myTest();
            
            // memanggil variabel x di luar fungsi akan menghasilkan error
            echo "<p>Variable x di luar fungsi adalah: $x</p>";
        ?> 

## Katakunci ` global `

Katakunci ` global ` digunakan untuk mengakses variabel global dari dalam sebuah fungsi.  Caranya dengan menambahkan katakunci ` global ` sebelum nama variabel yang dideklarasikan di dalam fungsi, seperti pada contoh berikut ini: 

        <?php
            $x = 5;
            $y = 10;
            
            function myTest() {
                global $x, $y;
                $y = $x + $y;
            }
            
            myTest();
            echo $y; // outputs 15
        ?>

PHP menyimpan semua variabel global dalam sebuah bentuk array disebut ` $GLOBALS[index] `.  Sebagai index adalah sama dengan nama variabel global. Array tersebut juga dapat diakses dari dalam fungsi dan dapat digunakan untuk mengupdate variabel secara langsung. 

Contoh di atas dapat dibuat dengan cara lain, seperti pada contoh di bawah ini:

        <?php
            $x = 5;
            $y = 10;
            
            function myTest() {
                $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
            }
            
            myTest();
            echo $y; // outputs 15
        ?>

## Katakunci STATIC

Ketika sebuah fungsi sudah selesai dieksekusi, semua variabel-vaiabel di dalamnya dihapus. Tetapi, bila diinginkan variabel LOKAL dalam fungsi tersebut boleh TIDAK DIHAPUS untuk keperluan proses berikutnya, yaitu dengan cara menambahkan katakunci ` static ` ketika mendeklarasi variabel di dalam sebuah fungsi, seperti pada contoh berikut ini:

        <?php
            function myTest() {
                static $x = 0;
                echo $x;
                $x++;
            }
            
            myTest();
            myTest();
            myTest();
        ?> 

Sehingga, setiap kali fungsi dipanggil, variabel tersebut tetap  menyimpan nilai terakhir yang diisikan. Meskipun demikian varaiabel tersebut tetap bersifat LOKAL, hanya dapat diakses dari dalam fungsi.

# Fungsi untuk mengolah String

Terdapat beberapa fungsi dalam PHP yang dapat digunakan untuk mengolah tipe data STRING, antara lain:
* ` strlen() ` // untuk mengetahui jumlah karakater dalam string
* ` str_word_count() ` // untuk menghitung jumlah kata dalam string
* ` strrev() `  //untuk membalik urutan karakter dalam string
* ` strpos() ` //untuk mengetahui posisi teks/karakter dalam string
* ` str_replace() ` // untuk mengganti beberapa karakter dengan karakter yang lainnya

Contoh:

		<?php
			echo strlen("Hello world!"); // outputs 12
			echo str_word_count("Hello world!"); // outputs 2
			echo strrev("Hello world!"); // outputs !dlrow olleH
			echo strpos("Hello world!", "world"); // outputs 6
			echo str_replace("world", "friend", "Hello world!"); // outputs Hello friend!
		?> 

Daftar fungsi pengolah string selengkapnya dapat dilihat disini [Daftar fungsi pengolah string ](http://www.w3schools.com/php/php_ref_string.asp)

# Konstanta (Constant) 

Adalah sebuah nama (identifier) untuk menyimpan satu nilai dan tidak dapat dirubah lagi selama program sedang berjalan. Nama konstanta dapat berawal dengan huruf atau under_score, ` TANPA TANDA DOLLAR ($) `. Sebuah konstanta selalu bersifat GLOBAL dan dapat diakses dari manapun.

untuk membuat sebuah konstanta digunakan katakunci ` define `.
	
		define(nama, nilai, case-insensitive)
		
` nama `: merupakan nama yang diberikan untuk konstanta
` nilai `: merupakan data yang akan disimpan dalam konstanta
` case-insensitive `: pilihan apakah konstanta bersifat ` case-sensitive `, default dari konstanta adalah ` FALSE ` atau dengan kata lain konstanta adalah ` case-sensitive `.

Contoh: Konstanta ` case-sensitive `

		<?php
			define("GREETING", "Welcome to W3Schools.com!");
			echo GREETING;
		?> 

Contoh: Konstanta ` case-insensitive `

		<?php
			define("GREETING", "Welcome to W3Schools.com!", true);
			echo greeting;
		?> 

## Konstanta selalu bersifat GLOBAL

		<?php
			define("GREETING", "Welcome to W3Schools.com!");
			
			function myTest() {
			    echo GREETING;
			}
			 
			myTest();
		?> 

# Operator 

Operator dapat digunakan untuk melakukan operasi pada variabel atau nilai(data), terdapat beberapa jenis operator dalam php antara lain adalah sebagai beirkut:

    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators

## Operator arithmetic 

Operator | Nama | Contoh | Hasil
--- | --- | --- | ---
` + ` | Addition/tambah | ` $x + $y ` | jumlah ` $x `  dan  ` $y ` 	
` - ` | Subtraction/pengurangan | ` $x - $y ` | selisih antara ` $x ` dan ` $y `
` * ` | Multiplication/perkalian | ` $x * $y ` | perklaian antara ` $x ` dan ` $y ` 	
` / ` | Division/pembagian | ` $x / $y ` | Hasil bagi antara ` $x ` dan ` $y ` 	
` % ` | Modulus/Modulo | ` $x % $y ` | sisa setelah pembagian ` $x ` dengan ` $y ` 	
` ** ` | Exponentiation/pangkat | ` $x ** $y ` 	| Hasil pemangkatan ` $x ` dengan ` $y ` (Introduced in PHP 5.6) 	 

## Assignment Operators

Assignment | sama dengan operasi | keterangan
--- | --- | ---
` x = y ` | `x = y` | nilai variabel di kanan diisikan ke variabel sebelah kiri 	
` x += y ` | `x = x + y` | Addition 	
` x -= y ` | `x = x - y` | Subtraction 	
` x *= y ` | `x = x * y` | Multiplication 	
` x /= y ` | `x = x / y` | Division 	
` x %= y ` | `x = x % y` | Modulus

## Comparison Operators

Operator | Nama | Contoh | Hasil 
--- | --- | --- | ---
` == ` | Equal/sama | `$x == $y` | Menghasilkan ` TRUE ` jika nilai `$x` sama dengan nilai `$y` 	
` ===` | Identical | `$x === $y` | Menghasilkan ` TRUE ` jika `$x` sama dengan `$y`, dan memiliki tipe yang sama
` !=` | Not equal | `$x != $y` | Menghasilkan ` TRUE ` jika `$x` TIDAK sama dengan `$y`	
` <>` | Not equal | `$x <> $y` | Menghasilkan ` TRUE ` jika `$x` TIDAK sama dengan `$y`	
` !== ` | Not identical | `$x !== $y` | Menghasilkan ` TRUE ` jika `$x` TIDAK sama dengan `$y`, tidak memiliki tipe yang sama
` > ` | Greater than/lebih besar | `$x > $y` | Menghasilkan ` TRUE ` jika `$x` lebih besar `$y`	
` < ` | Less than/lebih kecil | `$x < $y` | Menghasilkan ` TRUE ` jika `$x` lebih kecil `$y`	
` >= ` | Greater than or equal to | `$x >= $y` | Menghasilkan ` TRUE ` jika `$x` lebih besar atau sama dengan `$y`	
` <= ` | Less than or equal to | `$x <= $y` | Menghasilkan ` TRUE ` jika `$x` lebih kecil atau sama dengan `$y`	

## Operator Increment / Decrement

Operator | Nama | Keternagan 
--- | --- | ---
` ++$x ` | Pre-increment | tambahkan angka `1` pada `$x` dan simpan hasilnya dalam `$x` 	
` $x++ ` | Post-increment | Returns `$x`, tambah ` $x ` dengan ` 1 ` 	
` --$x ` | Pre-decrement | Kurangi `$x` dengan ` 1 `, kemudian returns `$x` 	
` $x-- ` | Post-decrement | Returns `$x`, kemmudian kurangi `$x` dengan ` 1 `

## Logical Operators

Operator | Nama | Contoh | Hasil
--- | --- | --- | ---
` and ` | ` And ` | ` $x and $y ` | menghasilkan `true`  jika  ` $x ` dan ` $y ` bernilai ` true ` 	
` or ` | ` Or ` | ` $x or $y ` | menghasilkan `true`  jika  ` $x ` atau ` $y ` bernilai ` true ` 	 	
` xor` | ` Xor ` | ` $x xor $y ` | menghasilkan `true`  jika salah satu dari ` $x ` dan ` $y ` bernilai ` true ` 	 	
` && ` | ` And ` | ` $x && $y ` |  menghasilkan `true`  jika  ` $x ` dan ` $y ` bernilai ` true `
` || ` | ` Or ` | `$x || $y` 	| menghasilkan `true`  jika  ` $x ` atau ` $y ` bernilai ` true `
`! ` | `Not` | `!$x` | menghasilkan `true`  jika  ` $x ` bernilai `false`

## String Operators

Operator | Nama | Contoh | Hasil
--- | --- | --- | --- 
` . ` | Concatenation/penggabungan | `$txt1 . $txt2` | Gabungan dari `$txt1` dan  `$txt2` 	
`.= ` | Concatenation assignment | `$txt1 .= $txt2` | Gabungkan `$txt2` ke dalam  `$txt1` hasilnya disimpan dalam `$txt1`

## Array Operators

Operator | Nama | Contoh | Hasil 
--- | --- | --- | ---
` + ` | Union | `$x + $y` | menggabungan array `$x` dan  `$y` 	
`== ` | Equality | `$x == $y` | Returns true if $x and $y have the same key/value pairs 	
`=== ` | Identity | `$x === $y` | Returns true if $x and $y have the same key/value pairs in the same order and of the same types
`!=` | Inequality | `$x != $y` | Returns true if $x is not equal to $y 	
`<> ` | Inequality | `$x <> $y` | Returns true if $x is not equal to $y 	
`!==` | Non-identity | `$x !== $y` | Returns true if $x is not identical to $y







