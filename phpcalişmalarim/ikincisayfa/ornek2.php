<!doctype html>
<html>
    <head>
		<meta charset="utf-8">
		<title>H2ORNEK3</title><!--ornek 3 ve ornek 2 aynı şeyi yapıyo ama dizilerin tanımlanma yöntemi farklı-->
	</head>
	<body>
		<h2>NOT LİSTESİ</h2>
		<?php 
		
			$numara[]=10; $numara[]=11; $numara[]=12;
			$numara[]=13; $numara[]=14; $numara[]=15;
		
			$isim[0]="Ahmet"; $isim[1]="Ayşe";
			$isim[2]="Mert"; $isim[3]="Hilal";
			$isim[4]="Osman"; $isim[5]="Kadir";
		
			$a=array(50,70,80,60,90,40);
			$f=array(70,40,100,90,90,30);
		
			echo"<table border = '1' cellspacing='0'>\n<tr>
			<th>NUMARA</th><th>AD</th><th>ARASINAV</th>
			<th>FİNAL</th><th>ORTALAMA</th><th>DURUM</th></tr>\n";
		
		for($i=0;$i<count($numara); $i++)
		{
			echo "<tr>\n";
			echo "<td>".$numara[$i]."</td>";
			echo "<td>$isim[$i]</td>";
			echo "<td>$a[$i]</td>";
			echo "<td>$f[$i]</td>";
			$ort=$a[$i]*0.3+$f[$i]*0.7;
			echo "<td>$ort</td>";
			if($ort>=60) echo "<td>BAŞARILI</td>";
			else echo"<td>BAŞARISIZ</td>\n";
			echo "</tr>\n";
			
		}
		echo "</table>\n";
		
		?>
		
		
		
	</body>
</html>