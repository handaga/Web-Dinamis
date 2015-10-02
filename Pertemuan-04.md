## Struktur logika program

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

