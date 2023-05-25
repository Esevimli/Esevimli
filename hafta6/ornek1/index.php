<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
		if(isset($_POST["olustur"]))
		{
			if(!empty($_POST["da"]))
			{
				$dosya=$_POST["da"];
				if(file_exists($dosya))
				{
					echo "Dosya zaten var!...";
				}
				else
				{
					touch($dosya);	
					echo "Dosya Oluşturuldu";
				}
			}
			else
				echo "Dosya Adını girmediniz!...";
				
		}
		
		if(isset($_POST["sil"]))
		{
			if(!empty($_POST["da"]))
			{
				$dosya=$_POST["da"];
				if(file_exists($dosya))
				{
					unlink($dosya);
					echo "Dosya Silindi!..";
				}
				else
					echo "Dosya zaten yok!...";
				
			}
			else
				echo "Dosya Adını girmediniz!...";
				
		}
		
		?>
		<form action="index.php" method="post">
			Dosya Adı: <input type="text" name="da">
			<br>
			<input type="submit" name="olustur" value="DOSYA OLUŞTUR"> <br>
			<input type="submit" name="sil" value="DOSYA SİL">
		</form>
			
	</body>
</html>