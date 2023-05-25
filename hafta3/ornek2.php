<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
			if(empty($_GET["gonder"])){

			
		?>
		<form action="al.php" method="get">
		Numara: <input type="text" name="num"> <br>
		Ad: <input type="text" name="ad"> <br>
		Bölüm: <select name="bol" size="1">
			<option hidden>Bölümünüzü Seçin!</option>
			<option >Bilgisayar</option>
			<option >Elektronik</option>
			<option >Elektrik</option>
			<option >Makine</option>
			<option >Otomotiv</option>
			<option >Gıda</option>		
		</select><br>
		<input type="submit" value="GÖNDER" name="gonder">
		
		<?php
				}
		else{
				
			$numara=0;
			if(isset($_GET["num"]))
				$numara=$_GET["num"];

			$ad="";
			if(isset($_GET["ad"]))
				$ad=$_GET["ad"];

			$bolum="";
			if(isset($_GET["bol"]))
				$bolum=$_GET["bol"];

			echo "<h2>HOŞ GELDİN ".$ad."</h2>";
			echo "Gönderdiğiniz veriler : <br>";
			echo "Numaranız:".$numara."<br>";
			echo "Adınız:".$ad."<br>";
			echo "Bölümünüz:".$bolum."<br>";
			}
	
			
		?>
		
		
	</body>
</html>