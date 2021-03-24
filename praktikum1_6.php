<html>
    <head>
        <title>Konversi Tipe</title>
    </head>
    <body>
        <?php
        $a = 300.4; //deklarasi variabel dengan memasukkan angka koma sebagai nilai
        echo $a; //menampilkan variabel a
        echo "<br>";
        echo "tipe Double : ", doubleval($a), "<br>"; //menampilkan variabel a sebagai tipe double
        echo "tipe Integer : ", intval($a), "<br>"; //menampilkan variabel a sebagai tipe integer
        echo "tipe String : ", strval($a); //menampilkan variabel a sebagai tipe string
        ?>
    </body>
</html>