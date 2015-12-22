# Cascade Style Sheets

Cascade Style Sheets (CSS) adalah sebuah bahasa digunakan untuk mengatur tampilan (style) dari halaman web, running di CLIENT (dalam browser)

Terdapat TIGA CARA mengatur style:

1. **inline-style**: script style diselipkan di samping TAG html.  ` <h1  style="color : red; ">Judul</h1> `
1. **internal style**: script style di tulis di antara TAG <STYLE> … </STYLE> dalam file html yang sama.
1. **eksternal style**: script style ditulis dalam sebuah file tersendiri ` *.css `, kemudian di-include dalam file html dengan perintah `<link rel="stylesheets"  href ="css/style.css" />`

## Syntax CSS:

> SELECTOR  {  PROPERTY : VALUE; }

**SELECTOR dapat berupa**:
1. **BUILT-IN TAG HTML**, (H1, TABLE, P, ..dll) contoh: ` body { color:blue; } `
2. **ID SELECTOR**  (` <div id="myid"></div> `), contoh:  ` #myid { font-size: 14px; color:black;} `
3. **CLASS SELECTOR** (` <div class="myclass"></div> `). contoh:  `.myclass { background-color:yellow;} `

**PROPERTY:**  jenis font, warna, border, background …dll

catatan:
Dalam Built-in TAG dapat ditambahkan ID dan/atau CLASS.

` <p   id="myparagraph" class="pertama"> …. </p> `

sebuah obyek boleh memiliki id dan/atau class lebih dari satu.

` <button   class="btn btn-lg btn-info" /> `

komponen button di atas memiliki TIGA NAMA CLASS
yaitu  ` "btn", "btn-lg", dan "btn-info" `

cascade:  

      <div class="bapak">
                <div  class="anak">
                         <div class="cucu"></div>
               </div>
      </div>
      <div class="cucu"></div>

      <style>
         .bapak .anak .cucu { 
            color: red;
            color: @WARNA_CUCU
         }
         .cucu {
            font: arial;
         }
      </style>


## Memanfaatkan Pustaka/library CSS dalam web

**Bootstrap**

1. download bootstrap dari link berikut:  http://getbootstrap.com/getting-started/#download  (free) 
1. Ekstrap file zip dalam folder aplikasi web (css, fonts,js);
1. Dowanload jQuery dari link ini : https://jquery.com/ (free)


**Note:**
Setiap Object dalam HTML boleh memiliki  nama CLASS lebih dari SATU.

contoh:
` <button type="button" class="btn btn-sm btn-default">Default</button> `, pada kode tersebut memiliki TIGA class:  btn,  btn-sm, dan btn-default. Setiap Object dalam HTML boleh memiliki  ID dan CLASS secara bersamaan.

Contoh:
 ` <a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle">Dropdown</a> `


Selanjutnya silahkan membaca tutorial di link ini:

1. [www.w3school.com](http://www.w3schools.com/css/default.asp)
1. [tutorialspoint](http://www.tutorialspoint.com/css/)
