## Apa itu jQuery?

jQuery adalah pustaka (library) fungsi dalam bahasa javascript, yang dapat bekerja dengan cepat, ringkas dan lengkap, dibuat oleh John Resig (2006). moto jQuery -   sedikit kode banyak kerja.

jQuery dapat digunakan untuk menyederhanakan proses pengolahan dokumen HTML meliputi, traversing (mengolah tag yang sejenis dalam jumlah banyak), Event handling (onClick dll), membuat animasi, dan implementasi Ajax, untuk mempercepat proses pengembangan aplikasi web.

Spesifikasi penting jQuery meliputi hal-hal sebagai berikut:
* **Memanipulasi DOM** (Document Object Model/tag2 dalam html), termasuk memodifikasi isi dokumen dalam DOM, modifikasi attribut.
* **Even Handling**: mengendalikan hampir sebagaian bersar event dalam browser, contoh onClick dll, secara mudah.
* **Ajax** : dapat digunakan untuk mengimplementasikan AJAX lebih sederhana.
* **Dapat digunakan untuk membuat ANIMASI** dengan berbagai jenis effect (Perubahan ketika oject muncul di layar) yang sudah tersedia dalam jQuery.
* **Lightweight** : ukuran file relatif kecil sehingga tidak membebani web.
* **Dapat digunakan di berbagai jenis browser**.
* **Menggunakan teknologi paling uptodate (CSS3)**.
	
Bagaimana cara menggunanakan jQuery.

* **Di-install dalam komputer lokal**  (lebih menguntungkan ketika aplikasi web masih dalam proses pegembangan). jQuery di download dari website jQuery (jQuery.com), kemudian di letakan dalam folder dimana aplikasi web berada. Terdapat dua versi  jQ 1.x  & jQ 2.x (versi 2.x tidak dapat digunakan dalam browser IE-6, 7, atau 8). Disediakan dalam dua bentuk  (COMPRESSED : minimisasi jq.min.js) dan UNCOMPRESSED (kode dapat dibaca oleh programmer).
	
contoh:

      <head>
         <script src="jquery-1.11.3.min.js"> </script>
      </head>

* **Mengambil dari link tak-berbayar (CDN: Content Delivery Network)**, lebih menguntungkan ketika aplikasi web sudah di publis (internet online).

Contoh:

      <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      </head> 
	
	
## Bentuk perintah dalam jQuery:

> # $(selector).action()

selector serupa dengan selector yang terdapat pada CSS. 
Format selector :

> ## $("p") : built in tag
> ## $("#nama-id") : id 
> ## $(".nama-class") : class

Contoh:

      $("p").hide() - menyembunyikan semua element <p>.
      $(".test").hide() - menyembunyikan semua element dengan class="test".
      $("#test").hide() - menyembunyikan semua element dengan  id="test".
      $("p .myclass").show();


ACTION() adalah satu proses yang akan diterapkan pada selector, daftar lengkap dapat dilihat dalam referensi jQuery .

Selanjutnya silahkan belajar jQuery dari link berikut:

> ## [jQuery-w3School](http://www.w3schools.com/jquery/jquery_intro.asp)
> ## [jQuery-Tutorialspoint](http://www.tutorialspoint.com/jquery/index.htm)

Beberapa link terkait jQuery:

> ### [jqueryUI](https://jqueryui.com/)
> ### [jquery Mobile](https://jquerymobile.com/)
> ### [jQuery plugin](https://plugins.jquery.com/)
> ### [jqWidgets](www.jqwidgets.com) 



