<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<h2>KAYIT İŞLEMLERİ</h2>
		
		<a href="index.php">KAYIT LİSTESİ</a>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href="index.php?islem=kg">KAYIT GİRİŞİ</a>
		<?php
			if(!isset($_GET["islem"])&& !isset($_POST["kaydet"])) // kayıt listeleme
			{
				include("kayitlistele.php");
				
			}
			else //kayıt girişi
			{
				include("kayitgirisi.php");
			}
			
		
		?>
	</body>
</html>