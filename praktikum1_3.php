<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
        //penulisan array dapat dibuat seperti berikut
        $nama[] = "Agung Teguh"; //menuliskan variabel array dengan nilainya
        $nama[] = "Wibowo"; //menuliskan variabel array dengan nilainya
        $nama[] = "Almais"; //menuliskan variabel array dengan nilainya
        echo $nama[1] . $nama[2] . $nama[0]; //mencetak nilai dari variabel array
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama); //menghitung jumlah elemen dengan fungsi count
        echo "jumlah elemen array = ".$jum_array;
        ?>
    </body>
</html>