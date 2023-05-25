<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
		if(isset($_COOKIE["oturum"]))
		{
			if($_COOKIE["oturum"]=="acik")
			{
				header("refresh:0; url=index.php");
				die();
			}
		}
		
		if(empty($_POST["gonder"]))
		{
			header("refresh:0; url=oturumac.php");
			die();
		}
		
		$ka=""; $sifre="";
		if(isset($_POST["ka"])) $ka=$_POST["ka"];
		if(isset($_POST["sifre"])) $sifre=$_POST["sifre"];
		
		if($ka=="admin" && 	$sifre=="123")
		{
			setcookie("oturum","acik",time()+60);
			header("refresh:0; url=index.php");
		}
		else
		{
			echo "Kullanıcı Adı Veya Şifre yanlış!...
				<br/>";
			echo "Oturum Açılmadı.<br/>";
			header("refresh:3; url=oturumac.php");
		}
		?>
		
	</body>
</html>