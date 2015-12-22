## Sejarah:

Js adalah bahasa pemrogran dinamik web.  Dibuat oleh Netscape th 1995 namanya 'LiveScript', yang dijalankan dalam browser Netscape dan Internet Explorer. Referensi dapat dicari di sini : [ebooks](http://it-ebooks.info/)

Aturan (standar) yang digunakan dalam javascript menggunakan aturan yang terdapat dalam dokumen  ECMA-262 Specification (dokumen standar Javascript)

## spesifikasi utama:
Client-side JavaScript

## Keuntungan:
Mengurangi (beban) interaksi dengan server.
Dapat memberikan respon kepada pengunjung lebih cepat. 
Membuat halaman web lebih interaktif (lebih dinamis).
Memiliki pustaka (obyek) banyak user-interface.

## Batasan:

1. Javascript tidak boleh/diijinkan menulis dan membaca file local (komputer yang menjalankan browser). kecuali COOKIE
1. Tidak dapat digunakan untuk berkomunikasi melalui jaringan.
1. Javascript hanya dapat dijalankan dalam SATU PROSESOR (CORE). (tidak dapat multitreat).

## Tools:

Notepad++, Eclipse, Sublime Text, dan teks editor yang lain dll
Javascript terbaru versi 2.0 keterangan lebih lanjut dapat di lihat di  [emacs](http://www.ecmascript.org/)

## FUNGSI JAVASCRIPT:

Beberapa hal yang dapat di lakukan oleh JS antara lain:

* JS dapat merubah isi (sebagian atau seluruh) halaman WEB. 
* Dapat merubah ATTRIBUT komponen HTML.
* Dapat merubah STYLE (CSS)
* Dapat digunakan untuk proses VALIDASI DATA (dalam FORM)


Contoh:
> Merubah HTML

      <!DOCTYPE html>
      <html>
      <body>

      <h1>Apa yang dapat dilakukan oleh Javascript?</h1>

      <p id="demo">JavaScript dapat merubah isi data HTML.</p>

      <button type="button"
      onclick="document.getElementById('demo').innerHTML = 'Hello JavaScript!'">
      Click Me!</button>

      </body>
      </html>
      
  > Merubah Attribut
  
        <!DOCTYPE html>
      <html>
      <body>

      <h1>JavaScript dapat merubah image (attribut: src)</h1>

      <img id="myImage" onclick="changeImage()" src="pic_bulboff.gif" width="100" height="180">

      <p>Klik pada gambar untuk menyalakan/memadamkan lampu.</p>

      <script>
      function changeImage() {
          var image = document.getElementById('myImage');
          if (image.src.match("bulbon")) {
              image.src = "pic_bulboff.gif";
          } else {
              image.src = "pic_bulbon.gif";
          }
      }
      </script>

      </body>
      </html>

  
  > Merubah Style 
  
        <!DOCTYPE html>
      <html>
      <body>

      <h1>Apa yang dapat dilakukan oleh Javascript?</h1>

      <p id="demo">JavaScript dapat merubah style komponen HTML.</p>

      <script>
      function myFunction() {
          var x = document.getElementById("demo");
          x.style.fontSize = "25px";           
          x.style.color = "red"; 
      }
      </script>

      <button type="button" onclick="myFunction()">Click Me!</button>

      </body>
      </html> 

  
  > melakukan validasi data
  
        <!DOCTYPE html>
      <html>
      <body>

      <h1>JavaScript dapat memvalidasi input</h1>

      <p>Silahkan memasukan angka antara 1 sampai 10:</p>

      <input id="numb" type="number">

      <button type="button" onclick="myFunction()">Submit</button>

      <p id="demo"></p>

      <script>
      function myFunction() {
          var x, text;

          // Get the value of the input field with id="numb"
          x = document.getElementById("numb").value;

          // If x is Not a Number or less than one or greater than 10
          if (isNaN(x) || x < 1 || x > 10) {
              text = "Input not valid";
          } else {
              text = "Input OK";
          }
          document.getElementById("demo").innerHTML = text;
      }
      </script>

      </body>
      </html> 

  
## Note:

Selanjutnya anda dapat mempelajari javascript lebih lengkap dari link berikut:

## [W3School](http://www.w3schools.com/js/js_intro.asp)
## [Tutorialspoint](http://www.tutorialspoint.com/javascript/)


      
