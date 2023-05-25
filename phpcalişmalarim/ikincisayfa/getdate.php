<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>H2ORNEK4</title>
</head>

<body>
	<h2>TARİH ZAMAN İşlemleri</h2>
	<?php
	$tz=getdate();
	
	$zaman="Saat: ".$tz["hours"].":".$tz["minutes"].":".$tz["seconds"];//saat dakika ve saniye verilerini zaman değişkenine atar
	
	$tarih="Tarih: ".$tz["mday"]."-".$tz["month"]."-".$tz["year"];//gün ay ve yıl verilerini zaman değişkenine atar
	
	echo $zaman."<br/>".$tarih;
	?>
</body>
</html>