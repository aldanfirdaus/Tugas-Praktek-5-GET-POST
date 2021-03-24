<?php
include "inc.php"; //mengeksekusi file inc.php
echo $angka; //menampilak nilai dari variabel
echo "<br>";
if ($angka==100){ //melakukan perbandingan dengan if
    echo "Memuaskan"; //mencetak teks
}elseif($angka<100&&$angka>=85){ //melakukan perbandingan dengan elseif
    echo "Sangat Baikt"; //mencetak teks
}elseif($angka<85&&$angka>=70){ //melakukan perbandingan dengan elseif
    echo "Baik"; //mencetak teks
}elseif($angka<70&&$angka>=55){ //melakukan perbandingan dengan elseif
    echo "Cukup"; //mencetak teks
}elseif($angka<55&&$angka>=0){ //melakukan perbandingan dengan elseif
    echo "Kurang"; //mencetak teks
}
?>