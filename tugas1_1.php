<?php
date_default_timezone_set('Asia/Jakarta'); //set waktu jakarta

if(isset($_POST['login'])){ //mengecek apakah button login diklik
    $tanggal = date("m-F-Y"); //deklarasi nilai tanggal saat login
    $jam = date(" h:i:s a"); //deklarasi nilai jam saat login
}
    $nama = $_POST['nama']; //deklarasi variabel nama
    $email = $_POST['email']; //deklarasi variabel email
if(empty($nama and $email)){ //mengecek apakah nama dan email nilainya kosong atau tidak
    header("Location:tugas2.php"); //jika salah satu atau keduanya kosong maka diarahkan ke halaman lain
}
?> 
<html>
    <head>
        <title></title>

        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                outline: 0;
                font-family: 'Open Sans', sans-serif;
            }
            body{
                height: 100vh;
                background-image: url("foto.jpg");
                background-position: center;
                background-repeat: no-repeat; 
                background-size: cover;
            }
            .container{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                padding: 20px 25px;
                width: 400px;

                background-color: rgba(0,0,0,.5);
                box-shadow: 0 0 10px ;
            }
            h2{
                transform: translate(-50%, -50%);
                left:50%;
                text-align: center; 
                top: 200px;
                position: relative;
                font-weight: bold;
                
            }
            .container ul li{
                list-style: none;
                font-family: cursive;
                font-size: 20;
                font-weight: bold;
                color: white;
            }
        </style>
    </head>
    <body>
        <h2>Selamat Datang <?php echo $nama?></h2>

        <div class="container">
            <ul>
                <li>Nama : <?php echo $nama;?></li>
                <li>Email : <?php echo $email;?> </li>
                <li>Tanggal login :  <?php echo $tanggal;?></li>
                <li>Waktu login : <?php echo $jam;?> </li>
            </ul>
        </div>
    </body>
</html>