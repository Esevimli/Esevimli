
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
		

	<form action="ornek2.php" method="post">
			İsim: <input type="text" name="ad">
			<br>
			Açıklama: 	<br>
			<textarea name="aciklama"  cols="30" rows="10"></textarea>
			<br>
			<input type="submit" name="gonder" value="GÖNDER">
		</form>
	<?php
		}
		else
		{
			$isim=0;
			if(isset($_POST["ad"])) 
				$isim=$_POST["ad"];
			
			$aciklama=0;
			if(isset($_POST["aciklama"])) 
				$aciklama=$_POST["aciklama"];
			
			$kelimeler=explode(' ',$aciklama);
			$adet =count($kelimeler);
			
			$isim=mb_strtoupper($isim);
			echo "<h2>Merhaba ".$isim."<h2/>";
			echo "Açıklamanız ".$adet." kelimeden oluşuyor";
			
			echo "<br><br>Kelimeler: <br>";
			for($i=0;$i<$adet;$i++)
				echo $kelimeler[$i]."<br/>";
			
			
		}
	?>
	</body>
</html>