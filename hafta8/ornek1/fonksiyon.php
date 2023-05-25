<?php
function asalSayilar($a,$b)
{
	for($i=$a;$i<$b;$i++)
	{
		$asal=1;
		for($bolen=2;$bolen<$i;$bolen++)
		{
			if($i%$bolen==0)
			{
				$asal=0; break;
			}
		}
		if($asal==1)
		{
			echo $i.", ";
		}
	}
	
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<form action="fonksiyon.php" method="get">
			1.Sayı <input type="text" name="s1"> <br>
			1.Sayı <input type="text" name="s2"> <br>
			<input type="submit" name="gonder" value="ASAL SAYILARI GÖSTER">
		</form>
		<?php
			if(isset($_GET["gonder"]))
			{
				$s1=0;$s2=0;
				
				if(!empty($_GET["s1"])) $s1=$_GET["s1"];
				if(!empty($_GET["s2"])) $s2=$_GET["s2"];
				
				asalSayilar($s1,$s2);
			}
		?>
	</body>
</html>