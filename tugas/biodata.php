<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
</head>
<body>
	<!--Tag pembuat form yang menggunakan method POST-->
	<form method="POST" action="biodataAct.php">
		<h2 align="alignleft">BIODATA SAYA</h1>
		<!-- Tag pembuat tabel-->
		<table width="200" align="alignleft" cellpadding="2" cellspacing="2">
			<!--Tag pembuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Alamat Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">No. Whatsapp</td>
				<td><input type="text" name="wa"></td>
			</tr>
			<tr>
				<td width="130">Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
		</table>
		<!--Pembuat tombol untuk mengeksekusi file action tgs3postAct.php-->
		<p align="alignleft"><input type="submit" name="btnLogin" value="Submit"> <input type="reset" name="reset" value="Reset"></p>
	</form>
</body>
</html>