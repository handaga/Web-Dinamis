
# Struktur logika program

Terdapat tiga macam struktur dasar program, yaitu 

## Sekuensial (berurutan)
## percabangan bersyarat (if-then)

		a. if (kondisi) { .. } else { ..}  // untuk DUA kondisi saja
		b. if (kondisi) { .. } else if (kondisi) { .. }  … dst
		c. switch (variabel) {  
			case [nilai-1] : { .. }; break;
			case [nilai-2] : { .. }; break;
			….
			default : {  … }   // akan di eksekusi jika tidak ada nilai yang cocok 

Contoh:

		<?php
			$t = date("H");
			
			if ($t < "20") {
			    echo "Have a good day!";
			}
		?>
		
		<?php
			$t = date("H");
			
			if ($t < "20") {
			    echo "Have a good day!";
			} else {
			    echo "Have a good night!";
			}
		?> 
		
		<?php
			$t = date("H");
			
			if ($t < "10") {
			    echo "Have a good morning!";
			} elseif ($t < "20") {
			    echo "Have a good day!";
			} else {
			    echo "Have a good night!";
			}
		?> 

## Switch 

Contoh:

		<?php
			$favcolor = "red";
			
			switch ($favcolor) {
			    case "red":
			        echo "Your favorite color is red!";
			        break;
			    case "blue":
			        echo "Your favorite color is blue!";
			        break;
			    case "green":
			        echo "Your favorite color is green!";
			        break;
			    default:
			        echo "Your favorite color is neither red, blue, nor green!";
			}
		?> 


## Pengulangan (loop)

		a. for - loop 
			
			for ($x=0;$x<100;$x++) { 
			   …. //perintah akan di eksekusi sebanyak 100x
			}
			
		b. while - loop

			while (kondisi) { 
			  ….  // di eksekusi selama kondisi terpenuhi / TRUE
			}

Contoh:


		<?php
			$x = 1;
			
			while($x <= 5) {
			    echo "The number is: $x <br>";
			    $x++;
			}
		?> 
		
		<?php
			$x = 1;
			
			do {
			    echo "The number is: $x <br>";
			    $x++;
			} while ($x <= 5);
		?> 
		
		<?php
			for ($x = 0; $x <= 10; $x++) {
			    echo "The number is: $x <br>";
			}
		?> 
		
		<?php
			$colors = array("red", "green", "blue", "yellow");
			
			foreach ($colors as $value) {
			    echo "$value <br>";
			}
		?> 

# Function (fungsi/prosedur)

Salah satu kekuatan dari PHP terletak pada ` function `, yaitu kumpulan dari beberapa statement untuk melakukan proses tertentu. PHP memiliki lebih dari 1000 fungsi bawaan (built-in function). Namun demikian programer diberi kesempatan untuk membuat ` function ` sendiri sesuai keperluan dalam menyusun program. 

Dalam PHP function memiliki sifat sebagai berikut:

* `Function ` adalah blok statement yang dapat digunakan berulang kali dengan cara memanggil nama fungsi-nya
* `Function` tidak di-eksekusi saat file php dipanggil (load).
* `Function` akan dieksekusi jika dipanggil namanya dalam program 

## Membuat `function` (fungsi)

Sebuah fungsi harus berawal dengan katakunci ` function `, nama fungsi dapat berawal dari ` huruf ` atau ` under_score ` (tetapi tidak boleh berawal dengan angka). Nama fungsi dalam PHP ` TIDAK CASE-SENSITIVE `  atau ` CASE-INSENSITIVE `. 

Dalam contoh berikut ini dibuat sebuah fungsi dengan nama ` writeMsg() `. Kurung kurawal pembuka ` { ` menunjukkan awal kode dalam blok fungsi dan kurung kurawal penutup ` } ` mennunjukkan kahir blok sebuah fungsi. Fungsi ini akan menampilkan kalimat "Selamat Belajar". 

		<?php
			function writeMsg() {
			    echo "Selamat Belajar";
			}
			
			writeMsg(); // call the function
		?>

## Argumen sebuah fungsi 

Informasi dapat dimasukan ke dalam fungsi dalam bentuk argumen, sebuah fungsi boleh memiliki satu argumen atau lebih. Nama argumen sama seperti variabel yang diletakkan di dalam kurung biasa `( $argumen ) ` setelah nama fungsi.  Contoh program berikut ini terdapat fungsi dengan satu argumen ` ($fname) `, ketika memanggil fungsi ` familyName() ` perlu disertakan nilai untuk argumen ` $fname ` dalam contoh tersebut nilai yang diberikan sebagai argumen adalah ` "fulan" `. Argumen hanya dapat dibaca di dalam fungsi saja.

		<?php
			function familyName($fname) {
			    echo "$fname bin Fulan.<br>";
			}
			
			familyName("fulan");
			familyName("Jani");
			familyName("Hege");
			familyName("Stale");
			familyName("Kai Jim");
			familyName("Borge");
		?>

Berikut adalah contoh fungsi yang memiliki DUA BUAH ARGUMEN 

		<?php
			function familyName($fname, $year) {
			    echo "$fname Refsnes. Born in $year <br>";
			}
			
			familyName("Hege", "1975");
			familyName("Stale", "1978");
			familyName("Kai Jim", "1983");
		?>


## Memberi nilai ` default ` pada argumen 

Jika fungsi dipanggil tanpa memberikan nilai pada argumen, maka fungsi akan menggunakan nilai ` default ` argumen. Nilai default sebuah argumen dapat diberikan pada saat deklarasi fungsi, seperti pada contoh berikut ini.

		<?php
			function setHeight($minheight = 50) {   //nilai default $minheight sama dengan 50
			    echo "The height is : $minheight <br>";
			}
			
			setHeight(350);
			setHeight(); // will use the default value of 50
			setHeight(135);
			setHeight(80);
		?>

## Nilai Kembalian (` return value `) dari sebuah fungsi

Sebuah dapat memiliki nilai kembalian (` return value `) seperti pada contoh berikut :

		<?php
			function sum($x, $y) {
			    $z = $x + $y;
			    return $z;
			}
			
			echo "5 + 10 = " . sum(5, 10) . "<br>";
			echo "7 + 13 = " . sum(7, 13) . "<br>";
			echo "2 + 4 = " . sum(2, 4);
		?>






