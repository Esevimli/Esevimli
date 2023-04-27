<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>H2ORNEK6</title>
</head>

<body>
	<?php
	$zaman=time();//1970 yılından bu zamana kadar geçen saniyeyi verir
	
	echo date("H:i",$zaman);//yukarıdaki zaman değişimindeki veriyi convertleyip bugünün saat ve dakika değerine çevirir
	echo date("d-m-Y",$zaman);//yukarıdaki zaman değişimindeki veriyi convertleyip bugünün gün ay ve yıl değerine çevirir
	?>
	
</body>
</html>