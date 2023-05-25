<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_GET["gonder"]))
	{
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
	else
		echo("Veri girmediniz!...")
	
	
	?>
</body>
</html>