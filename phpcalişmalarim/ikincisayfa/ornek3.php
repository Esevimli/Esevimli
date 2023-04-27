<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>H2ORNEK2</title>
</head>

<body>
	<h2>NOTLAR</h2>
	<table></table>
	<?php
		$notlar=array(array(1,70,80),array(2,50,80),array(3,90,70),array(4,30,50),array(5,60,70));//iki boyutlu diziler(matrisler) böyle yazılabiliyo ilk satır =1(indis no),70(vize),80(final) olur
	
		$tablo = "<table border='1' cellspacing='0' 
		style='background-color:yellow'>
		<tr><th>NUMARA</th><th>ARASINAV</th><th>FİNAL</th><th>ORTALAMA</th></tr>";
	
		for($sat=0;$sat<5;$sat++)
		{
			$tablo.="<tr>";
			for($sut=0;$sut<3;$sut++)
			{
				$tablo.="<td>".$notlar[$sat][$sut]."</td>";
			}
			$ort=$notlar[$sat][1]*0.3 +
				 $notlar[$sat][2] * 0.7;
			$tablo.="<td>".$ort."</td></tr>";
		}
	
		$tablo.="</tablo>";
	
		echo $tablo;
			
	
	?>
</body>
</html>