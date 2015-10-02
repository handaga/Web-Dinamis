## Feature php

php adalah sebuah script yang berjalan di server, sangat berdaya guna untuk membuat aplikasi web dinamis dan halaman web interaktif.

### PHP dapat digunakan untuk:

1. membuat konten halaman web dinamis
2. dapat mebuat, membuka, membaca, menulis, menghapus, dan menutup file yang ada di server.
3. dapat mengelola data dari FORM (html)
4. dapat mengirim/menulis dan menerima/membaca COOKIES
5. dapat menambah, menghapus, memodifikasi data dalam server database.
6. dapat digunakan untuk mengontrol akses user.
7. dapat digunakan untuk mengacak(encrypt) data.

### Mengapa menggunakan PHP

1. dapat di jalankan di berbagai platform (windows, Linux, Unix, Mac OS, dll)
2. kompatibel dengan kebanyakan aplikasi WEB SERVER.
3. Dapat digunakan untuk berkomunikasi dengan berbagai macam sistem server BASISDATA.
4. Free
5. Mudah dipelajari dan berjalan di server.

# Struktur program php

script php di awali dengan tanda   
**<?php**  dan diakhiri dengan tanda  
**?>**  contoh:

	<?php 
		echo "Selamat Belajar php!";
	?>

## Baris komentar atau keterangan

### Komentar satu baris

Untuk menambahkan komentar pada program sebanyak satu baris dapat digunakan tanda '//'  atau '#' contoh:

	<?php
		# Ini adalah baris keterangan, dan
		# ini adalah baris keterangan ke dua

		// ini juga sebuah baris keterangan.
		print "Contoh menambah satu baris keterangan";
	?>

Komentar tidak harus di letakan di awal baris, dapat juga di letakan di tengah baris. Semua teks yang berada di belakang  tanda '//' akan di anggap sebagai komentar. Contoh:

	<?php 
		$x += 10; // Increment $x by 10
	?>

### Komentar lebih dari satu baris

Terkadang diperlukan menambahkan keterangan yang cukup panjang sehingga perlu ditulis lebih dari satu baris. Contoh:

	<?
		/* 
			Ini adalah komentar dalam beberapa baris
			Penulis : Fulan
			Tujuan: Demo komentar dengan banyak baris
			Subject: PHP
		*/
		print "Sebuah contoh kmentar beberapa baris";
	?>

## PHP tidak sensitif terhadap whitespace

**whitespace** adalah sebuah karakter yang TIDAK TAMPAK di layar, termasuk di dalamnya adalah **SPASI**, **TABS**, **LINE FEED** dan **CARRIAGE-RETURN**.  PHP tidak sensitife terhadap whitespace dalam arti bahwa berapapun jumlah whitespace dalam kode php tidak akan mempengaruhi hasil kode.

Sebagai contoh, berikut ini kode php untuk menjumla hkan angka 2 + 2 dan menyimpan hasilnya dalam variabel **$empat**, semua baris kode menghasilkan nilai yang sama.

	<?php 
		$empat = 2 + 2; // single spaces
		$empat <tab>=<tab>2<tab>+<tab>2 ; // spaces and tabs
		$empat =
		2+
		2; // multiple lines
	?>

## PHP bersifat case-sensitive

case-sensitife berarti php akan membedakan variabel yang ditulis dengan huruf kecil dan huruf besar, contoh, variabel **$nama** berbeda dengan variabel **$NAMA**.

	<?php
		$capital = 67;
		print("Nilai variable capital adalah $capital<br>");
		print("Nilai variable CAPITAL adalah $CAPITAL<br>");
	?>

akan menghasilkan output sbb:

	Nilai variable capital adalah 67
	Nilai variable CAPITAL adalah

## Pernyataan adalah ekspresi yang diakhiri dengan tanda TITIK-KOMA

Sebuah pernyataan (statement) dalam PHP adalah sebuah ekspresi yang diikuti dengan tanda TITIK-KOMA (semicolon: `;`) sembarang susunan pernyataan php yang terletak di antara tanda `<?php` dan `?>` adalah sebuah program php yang valid.  Contoh berikut adalah sebuah pernyataan untuk mengisi (_assignment_) sebuah variabel dengan sebuah string.

	$salam = "Selamat belajar PHP!";

## Ekspresi adalah kombinasi dari beberapa token

TOKEN adalah bagian terkecil dari pernyataan dalam PHP, sebuah TOKEN dpat berupa sebuah angka (3.14), string ('teks'), variabel ($var), atau sebuah konstanta (TRUE), dan beberapa kata khusus (reserved-words) yang digunakan dalam php, contoh if, else, while, for dan sebagainya.

## Kurung kurawal `{ … }` adalah tanda sebuah awal dan akhir blok

Meskipun pernyataan tidak dapat dikombinasikan seperti pada ekspresi, tapi dibolehkan untuk meletakan pernyataan dimanapun di dalam tanda kurung `{ ... }`. 
Contoh: 

	if (3 == 2 + 1)
		print("Good - I haven't totally lost my mind.<br>");
	
	if (3 == 2 + 1)
	{
		print("Good - I haven't totally");
		print("lost my mind.<br>");
	}

## Menjalankan kode php dari command-prompt.

Untuk menjalankan php dari command-prompt, dapat dilakukan dengan cara sebagai berikut:

Sebelumnya pastikan lokasi program php.exe terdapat dalam daftar lokasi folder dalam variabel PATH. Jika installasi XAMPP terdapat dalam folder C:\XAMPP maka program php.exe diletakan dalam subfolder C:\XAMPP\php
Jika lokasi folder tersebut belum termasuk dalam PATH tambahkan dengan perintah seperti berikut:

	C:\>path = %path%;C:\xampp\php

selanjutnya untuk menjalankan kode php yang disimpan dalam file   test.php, dapat dilakukan dengan cara berikut:

	C:\> php test.php




