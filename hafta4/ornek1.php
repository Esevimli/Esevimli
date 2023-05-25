<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>
	
	<?php
		if(!isset($_POST["gonder"]))
		{
			
		
	?>
		
	<h2>KUVVET HESAPLAMA</h2>
	<form action="ornek1.php" method="post">
			Sayı: <input type="text" name="s1">
			<br>
			Üs: <input type="text" name="s2">
			<br>
			<input type="submit" name="gonder" value="HESAPLA">
		</form>
	<?php
		}
		else
		{
			$sayi=0;
			if(isset($_POST["s1"])) 
				$sayi=$_POST["s1"];
			
			$us=0;
			if(isset($_POST["s2"])) 
				$us=$_POST["s2"];
			
			if(is_numeric($sayi) && is_numeric($us) )
			$sonuc=pow($sayi,$us);
			else
				$sonuc="Sayı ve Üs değeri olarak sayı tipinde değer girmelisiniz!...";
			echo"SONUÇ: ".$sonuc;
			
		echo"<br><br><a href='ornek1.php'>
	<input type='button' value='YENİ HESAPLAMA'></a>";
		
		}
	?>
	
</body>
</html>