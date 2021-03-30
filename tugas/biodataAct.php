<!DOCTYPE html>
<html>
<head></head>
<body>
</body>
</html>

<!--Deklarasi Script PHP-->
<?php
	//mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<align><h2>Selamat Datang ".$_POST['nama'].", inilah biodata singkat Anda"."</h2></align><br>";
	echo "<align>Nama : ".$_POST['nama']."</align><br>";
	echo "<align>Tempat, Tanggal Lahir : ".$_POST['ttl']."</align><br>";
	echo "<align>Alamat : ".$_POST['alamat']."</align><br>";
	echo "<align>Alamat Email : ".$_POST['email']."</align><br>";
	echo "<align>No. Whatsapp : ".$_POST['wa']."</align><br>";
	echo "<align>Pekerjaan : ".$_POST['pekerjaan']."</align><br>";
?>