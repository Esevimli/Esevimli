<?php session_start();?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
<?php
if(isset($_SESSION["zr"]))
	{
		$zr = $_SESSION["zr"];
		echo "<body bgcolor='".$zr."'>";
		 //body i bu şekilde if else ile yazabilirsin bu kodda eğer sayfa kaydet butonuna basılarak açıldıysa body nin arkaplan rengini değiştirerek açılır basılmadıysa else çalışıp normal açar
	}
	else
		echo "<body>";
?>
	<a href="sayfa1.php">Sayfa1</a>
	<br><br><br>
	İÇERİK
		
	</body>
</html>