<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
		$baglanti=mysqli_connect("localhost","admin","nbieVsc57Af1lVPA","admin");
		
		if(!$baglanti) die("Bağlantı hatası: ".mysqli_connect_error());
		
		mysqli_set_charset($baglanti,"utf8");
		
		$sorgu=mysqli_query($baglanti,"SELECT * FROM KAYIT");
		
		
		if(mysqli_num_rows($sorgu)>0)
		{
			$tablo="<table border='1' cellspacing='0'><tr><th>NUMARA</th><th>AD</th><th>ADRES</th><th>MAAŞ</th></tr>";
			
			while($kayit=mysqli_fetch_row($sorgu))
			{
				$tablo.="<tr>";
				for($i=0;$i<4; $i++)
				{
					$tablo.="<td>".$kayit[$i]."</td>";
				}
				$tablo.="</tr>";
			}
			$tablo.="</table>";
			echo $tablo;
		}
		else
			echo "Kayıt Yok!...";
		
		mysqli_close($baglanti);
		?>
	</body>
</html>