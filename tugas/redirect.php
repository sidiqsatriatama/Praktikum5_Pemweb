<!DOCTYPE html>
<html>
<head>
	<title>Salah</title>
</head>
<body>
	<?php 
		if(empty($_POST['nama']) || empty($_POST['Email'])){
			header("Location:main.php");
		}else{
			echo 'NAMA  : ',$_POST['nama'],'</br>';
			echo 'EMAIL : ',$_POST['Email'],'</br></br>';
			echo date("g:i:s a, 	D , m-F-Y");
		}
	?>
	
</body>
</html>