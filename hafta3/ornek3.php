<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
			if(empty($_POST["gonder"]))
			{	
		?>
		<form action="form3.php" method="post">
			Numara: <input type="text" name="num"> <br>
			Ad: <input type="text" name="ad"> <br>
			Bölüm: <select name="bol" size="1">
				<option hidden>Bölümünüzü Seçin!</option>
				<option >Bilgisayar</option>
				<option >Elektronik</option>
				<option >Elektrik</option>
				<option >Makine</option>
				<option >Otomotiv</option>
				<option >Gıda</option>		
			</select><br>
			Dersler:  <br>
			<input type="checkbox" name="d1" value="Türk Dili"> Türk Dili <br>
			<input type="checkbox" name="d2" value="Tarih"> Tarih <br>
			<input type="checkbox" name="d3" value="Matematik"> Matematik <br>
			<input type="checkbox" name="d4" value="Programlama"> Programlama <br>
			<input type="checkbox" name="d5" value="Web Tasarımı"> Web Tasarımı <br>
			<input type="submit" value="GÖNDER" name="gonder">
		</form>
		<?php
			}
			else
			{
				$numara=0;
				if(isset($_POST["num"]))
					$numara=$_POST["num"];
				
				$ad=0;
				if(isset($_POST["ad"]))
					$ad=$_POST["ad"];
				
				$bolum=0;
				if(isset($_POST["bol"]))
					$bolum=$_POST["bol"];
				
				$dersler=[0];
				for($i=1;$i<=5;$i++)
				{
					if(isset($_POST["d".$i]))
					 array_push($dersler,$_POST["d".$i]);
				}
				array_shift($dersler);
				$tablo="<table border='1'cellspacing='0'><tr>";
				$tablo.="<th>NUMARA</th><td>".$numara."</td></tr>";
				$tablo.="<th>AD</th><td>".$ad."</td></tr>";
				$tablo.="<th>BÖLÜM</th><td>".$bolum."</td></tr>";
				$tablo.="<th>Seçilen Dersler</th><td>";
				
				for($i=0;$i<count($dersler);$i++)
				{
					$tablo.=$dersler[$i]."<br/>";
				}
				
				$tablo.="</td></tr></table>";
				echo $tablo;
				
				
			}
		?>
		
		
	</body>
</html>