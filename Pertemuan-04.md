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


# Struktur logika program

Terdapat tiga macam struktur dasar program, yaitu 

1. Sekuensial (berurutan)
2. percabangan bersyarat (if-then)

		a. if (kondisi) { .. } else { ..}  // untuk DUA kondisi saja
		b. if (kondisi) { .. } else if (kondisi) { .. }  … dst
		c. switch (variabel) {  
			case [nilai-1] : { .. }; break;
			case [nilai-2] : { .. }; break;
			….
			default : {  … }   // akan di eksekusi jika tidak ada nilai yang cocok 


3. Pengulangan (loop)

		a. for - loop 
			
			for ($x=0;$x<100;$x++) { 
			   …. //perintah akan di eksekusi sebanyak 100x
			}
			
		b. while - loop

			while (kondisi) { 
			  ….  // di eksekusi selama kondisi terpenuhi / TRUE
			}

