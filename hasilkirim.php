<?php
if (empty($_POST["nama"])){ //mengecek apakah ada kekososngan dari input nama dengan menggunkan fungsi empty
    header("Location:kosong.php"); //jika iya akan diteruskan ke kosong.php
}else{
    echo "<center>Nama :".$_POST['nama']."</center><br>"; //jika tidak akan cetak nama 
}
?>