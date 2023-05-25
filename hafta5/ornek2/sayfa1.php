<?php session_start(); ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
<?php
	$zr="white";
	if(isset($_GET["kaydet"]))
	{
		if(isset($_GET["zr"]))
		{
			$zr=$_GET["zr"];
			$_SESSION["zr"]=$zr;
		}
			
		
		
	}
	
	if(isset($_SESSION["zr"]))
	{
		$zr = $_SESSION["zr"];
		echo "<body bgcolor='".$zr."'>";
		 //body i bu şekilde if else ile yazabilirsin bu kodda eğer sayfa kaydet butonuna basılarak açıldıysa body nin arkaplan rengini değiştirerek açılır basılmadıysa else çalışıp normal açar
	}
	else
		echo "<body>";
		

	
?>
		<form action="sayfa1.php" method="get">
			Zemin Rengi: <select name="zr" size="1">
				<option value="red">Kırmızı</option>
				<option value="lightblue">Mavi</option>
				<option value="lightgreen">Yeşil</option>
				<option value="yellow">Sarı</option>
				<option value="gray">Gri</option>
				<option value="white">Beyaz</option>
			</select>
			<input type="submit" name="kaydet" value="KAYDET">
		</form>
	<br><br><br><br>
	<a href="sayfa2.php">Sayfa2</a>
	</body>
</html>