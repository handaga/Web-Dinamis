
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

Sebuah fungsi dapat memiliki nilai kembalian (` return value `) seperti pada contoh berikut :

		<?php
			function sum($x, $y) {
			    $z = $x + $y;
			    return $z;
			}
			
			echo "5 + 10 = " . sum(5, 10) . "<br>";
			echo "7 + 13 = " . sum(7, 13) . "<br>";
			echo "2 + 4 = " . sum(2, 4);
		?>

# Array 

Array dapat digunakan untuk menyimpan beberapa nilai dalam satu variabel, seperti dalam contoh berikut ini:

		<?php
			$cars = array("Volvo", "BMW", "Toyota");
			echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
		?> 

Terdapat tiga jenis array dalam PHP, yaitu:

* `Indexed arrays` - array dengan nomor index
* `Associative arrays` - array dengan `key` atau `index` berupa `nama`
* `Multidimensional arrays` - array yang mengandung satu array atau lebih 

## Indexed arrays

Terdapat dua cara untuk membuat array tipe `Indexed arrays` seperti pada contoh berikut:

		$cars = array("Volvo", "BMW", "Toyota");
		
atau

		$cars[0] = "Volvo";
		$cars[1] = "BMW";
		$cars[2] = "Toyota"; 

Jumlah elemen dalam array dapat dihitung dengan bantuan sebuah fungsi ` count($cars) `

		<?php
			$cars = array("Volvo", "BMW", "Toyota");
			echo count($cars);
		?> 

Pengulangan untuk membaca elemen dalam `Indexed arrays` 

		<?php
			$cars = array("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);
			
			for($x = 0; $x < $arrlength; $x++) {
			    echo $cars[$x];
			    echo "<br>";
			}
		?> 

## Associative Arrays

Adalah array yang menggunakan  `key` berupa sebuah nama sebagai index, seperti contoh dalam kode berikut ini:

		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		
atau 

		$age['Peter'] = "35";
		$age['Ben'] = "37";
		$age['Joe'] = "43"; 

contoh penggunaan array dalam program 

		<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			echo "Peter is " . $age['Peter'] . " years old.";
		?> 

Akses elemen dalam array menggunakan perintah pengulangan ` foreach `

		<?php
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			
			foreach($age as $x => $x_value) {
			    echo "Key=" . $x . ", Value=" . $x_value;
			    echo "<br>";
			}
		?> 

ELemen dalam array dapat diurut dengan menggunakan beberapa fungsi pengurut data sebagai berikut:

* `sort()` - sort arrays in ascending order
* `rsort()` - sort arrays in descending order
* `asort()` - sort associative arrays in ascending order, according to the value
* `ksort()` - sort associative arrays in ascending order, according to the key
* `arsort()` - sort associative arrays in descending order, according to the value
* `krsort()` - sort associative arrays in descending order, according to the key

Contoh:

		<?php
		$cars = array("Volvo", "BMW", "Toyota");
		sort($cars);
		?> 
		
		<?php
		$numbers = array(4, 6, 2, 22, 11);
		sort($numbers);
		?>
		
		<?php
		$cars = array("Volvo", "BMW", "Toyota");
		rsort($cars);
		?> 
		
		<?php
		$numbers = array(4, 6, 2, 22, 11);
		rsort($numbers);
		?> 
		
		
		<?php
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		asort($age);
		?> 
		
		<?php
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		ksort($age);
		?> 
		
		<?php
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		arsort($age);
		?> 
		
		<?php
		$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		krsort($age);
		?> 

Daftar fungsi yang terkait dengan array dapat dilihat di sini [Kumpulan fungsi PHP untuk pengolahan array](http://www.w3schools.com/php/php_ref_array.asp)


# Built-in Global variabel dalam PHP - SUPERGLOBALS

superglobals selalau dapat diakses dari bagian manapun dalam progra, berikut adalah daftar nama variabel superglobal 

		$GLOBALS
		$_SERVER
		$_REQUEST
		$_POST
		$_GET
		$_FILES
		$_ENV
		$_COOKIE
		$_SESSION

Contoh penggunaan dalam program 
## $GLOBALS

Variabel ` $GLOBALS ` adalah variabel superglobal yang dapat digunakan untuk mengakses semua variabel global dalam kode PHP (termasuk akses/membaca dari dalam sebuah fungsi).  PHP menyimpan semua variabel global dalam bentuk ` array ` dengan nama ` $GLOBALS[index] ` dimana  ` index ` berupa nama variabel yang akan diakses secara global, contoh:

		<?php
			$x = 75;
			$y = 25;
			 
			function addition() {
			    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			 
			addition();
			echo $z;
		?> 

## Variabel $_SERVER 

` $_SERVER ` adalah sebuah variabel superglobal yang digunakan oleh PHP untuk menyimpan beberapa data/informasi seperti ` header `, ` path `, dan ` lokasi script `.  Berikut ini contoh sebagian informasi yang dapat diakses dari variabel global ` $_SERVER `. Daftar informasi selengkapnya dapat di lihat di sini [Daftar informasi dalam $_SERVER['x'] selengkapnya](http://php.net/manual/en/reserved.variables.server.php)

		<?php
			echo $_SERVER['PHP_SELF']; echo "<br>";
			echo $_SERVER['SERVER_NAME']; echo "<br>";
			echo $_SERVER['HTTP_HOST']; echo "<br>";
			echo $_SERVER['HTTP_REFERER']; echo "<br>";
			echo $_SERVER['HTTP_USER_AGENT']; echo "<br>";
			echo $_SERVER['SCRIPT_NAME'];
		?> 
		
## Variabel global ` $_REQUEST ` 

` $_REQUEST ` digunakan untuk membaca data yang dikirim melalui FORM HTML SUBMIT, mengunakan sembarang jenis `form method` (POST, GET, PUT, DELETE), contoh : 

		<html>
		<body>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		  Name: <input type="text" name="fname">
		  <input type="submit">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    // collect value of input field
		    $name = $_REQUEST['fname'];
		    if (empty($name)) {
		        echo "Name is empty";
		    } else {
		        echo $name;
		    }
		}
		?>
		
		</body>
		</html>	

## Variabel $_POST'

`$_POST` digunakan untuk membaca data yang dikirim melalui FORM HTML SUBMIT, tetapi khusus yang menggunakan method `POST`, contoh:

		<html>
		<body>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		  Name: <input type="text" name="fname">
		  <input type="submit">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    // collect value of input field
		    $name = $_POST['fname'];
		    if (empty($name)) {
		        echo "Name is empty";
		    } else {
		        echo $name;
		    }
		}
		?>
		
		</body>
		</html>

## Variabel ` $_GET `

`$_GET` digunakan untuk membaca data yang dikirim melalui FORM HTML SUBMIT, tetapi khusus yang menggunakan method `GET`. Selain itu ` $_GET ` juga dapat digunakan untuk membaca data yang dikirim menggunakan `URL`,  contoh:

		<html>
		<body>
		
		<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
		
		</body>
		</html> 

Isi file `test_get.php` adalah sebagai berikut:

		<html>
		<body>
		
		<?php
		echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
		?>
		
		</body>
		</html>














