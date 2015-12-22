## Ajax

**AJAX** : Asynchronous Javascript and XML
**Fungsi**: Untuk mengupdate sebagian halaman web tanpa me-REFRESH keseluruhan halaman.

## Contoh:

       <!DOCTYPE html>
      <html>
      <head>
         function loadDoc() {
           //membuat object httprequest 
           var xhttp = new XMLHttpRequest();
           //membuat fungsi untuk mengolah data response dari server 
           xhttp.onreadystatechange = function() {
             if (xhttp.readyState == 4 && xhttp.status == 200) {
              document.getElementById("demo").innerHTML = xhttp.responseText;
             }
           };
           //menyiapkan http request
           xhttp.open("GET", "ajax_info.txt", true);
           //mengirim http request
           xhttp.send();
         } 
      </head>
      <body>

      <div id="demo"><h2>Let AJAX change this text</h2></div>

      <button type="button" onclick="loadDoc()">Change Content</button>

      </body>
      </html> 


Selanjutnya detial langkah-langkah membuatimplementas Ajax dengan javascript dapat di lihat di sini:

## [Ajax - W3School](http://www.w3schools.com/ajax/default.asp)
