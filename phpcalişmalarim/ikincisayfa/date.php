<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>H2ORNEK5</title>
</head>

<body>
	<h2>Date Fonksiyounu</h2>
	<?php
		$zaman="Saat: ".date("H:i:s");//h=hour,i=min,s=second
		
		$tarih="Tarih: ".date("Y-m-d");//y=year,m=month,d=day
	
		echo $zaman."<br/>".$tarih;
	
	
	?>
</body>
</html>