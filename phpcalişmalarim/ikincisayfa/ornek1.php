<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>H2ORNEK1</title>
</head>

<body>
	
	<h2>DİZİ İŞLEMLERİ</h2>
	<?php
	//php de diziler eleman ekledikçe genişler android deki arraylist gibi
	$iller=array("Tekirdağ","İstanbul","Edirne","İzmir");
	$sehirler[0]="Kocaeli";
	$sehirler[1]="Çanakkale";
	$sehirler[2]="Ankara";
	
	$iller = array_merge($iller,$sehirler); //iller ve sehirler dizilerini birleştirir sehirleri iller dizinin sonuna koyar
	array_push($iller,"Antalya");//iller dizisinin sonuna antalyayı ekler
	sort($iller);//küçükten büyüğe sıralar yazı ise a dan z ye sayı ise 0 dan artı ya dizideki indis numaralarınıda değiştirir örn bu dizide ankara 0 ıncı eleman olur
	
	for($i=0; $i<count($iller);$i++)
	{
		echo $iller [$i]. "<br/>";
	}
	?>
</body>
</html>