<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		
	<form action="Ornek2.php" method="post">
		İlk Sayı: <input type="text" name="s1" /><br>
		Son Sayı: <input type="text" name="s2" /><br>
		<input type="submit" value="GÖNDER" />
	</form>
	<?php
		$s1=0; $s2=0;
		if(isset($_POST["s1"])) $s1=$_POST["s1"]; //eğer s1 isminde bir değer geldi ise(isset) gelen değeri s1 değişkenine koy
		if(isset($_POST["s2"])) $s2=$_POST["s2"];
	
		for($i=$s1; $i<=$s2; $i++)
		{
			if($i%2==0)
				echo $i."<br/>";// .(nokta)(c# daki + writeline da falan kullanıyodukya yan yana yazma için o)
		}
	?>
</body>
</html>