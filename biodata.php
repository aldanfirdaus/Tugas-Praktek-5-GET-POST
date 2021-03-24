<?php 
$namaLengkap = "M. Aldan Adiar Firdaus";
$namaPanggilan = "Aldan";
$tmpTgl = "Surabaya, 30 Oktober 2000";
$jenisKelamin = "laki-laki";
$agama = "Islam";
$alamat = "Jln. Gunung Anyar Baru 2b no 6, Surabaya";
$status = "Belum Menikah";
$pekerjaan = "Mahasiswa";
$kewarganegaraan = "Indonesia";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Biodata</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 		}
 		body{
 			height: 100vh;
 			background-image: url("foto.jpg");
 			background-position: center;
 			background-repeat: no-repeat;
 			background-size: cover;
 		}
 		h1{
 			border-bottom: solid 3px black;
 			text-transform: uppercase;
 		}
 		.container{
 			position: absolute;
 			left: 50%;
 			top: 200px;
 			transform: translate(-50%,-50%);
 			background-color: rgba(0,0,0,.2);

 		}
 		.container li{
 			list-style: none;
 			padding: 4px;
 			font-family: cursive;
 		}
 	</style>
 </head>
 <body>
 	<strong><center><h1>Biodata</h1></center></strong>
 	<br>
 	<div class="container">
 	<ul>
 		<li>Nama Lengkap : <?php echo $namaLengkap;?></li>
 		<li>Nama Panggilan : <?php echo $namaPanggilan;?></li>
 		<li>Tempat, Tanggal Lahir : <?php echo $tmpTgl;?></li>
 		<li>Jenis Kelamin : <?php echo $jenisKelamin; ?></li>
 		<li>Agama : <?php echo $agama; ?></li>
 		<li>Alamat : <?php echo $alamat; ?></li>
 		<li>Status : <?php echo $status; ?></li>
 		<li>Pekerjaan : <?php echo $pekerjaan; ?></li>
 		<li>Kewarganegaraan : <?php echo $kewarganegaraan; ?></li>
 	</ul>
 	</div>
 </body>
 </html>