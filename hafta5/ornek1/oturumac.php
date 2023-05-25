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
		
		?>
		<form action="kontrol.php" method="post">
		  Kullanıcı Adı:<input type="text" name="ka"> <br>
			Şifre:<input type="password" name="sifre"> <br>
			<input type="submit" name="gonder" value="OTURUM AÇ">
		</form>
		
		<br><br>
		Kullanıcı adı:admin <br>
		Şifre:123
		
		
	</body>
</html>