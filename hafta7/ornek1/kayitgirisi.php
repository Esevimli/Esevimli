<form action="index.php" method="post">
	Numara: <input type="text" name="num"> <br>
	Ad: <input type="text" name="ad"> <br>
	Adres: <input type="text" name="adr"> <br>
	Maaş: <input type="text" name="maas"> <br>
	
	<input type="submit" name="kaydet" value="KAYDET">
</form>
<?php
	if(isset($_POST["kaydet"]))
	{
		$numara=0; $ad=""; $adres=""; $maas=0;
		
		if(!empty($_POST["num"])) $numara=$_POST["num"];
		if(!empty($_POST["ad"])) $ad=$_POST["ad"];
		if(!empty($_POST["adr"])) $adres=$_POST["adr"];
		if(!empty($_POST["maas"])) $maas=$_POST["maas"];
		
		$dosya=fopen("kayit.txt","a");
		flock($dosya,LOCK_EX);
		
		fwrite($dosya,$numara."\n".$ad."\n".$adres."\n".$maas."\n");
		
		flock($dosya,LOCK_UN);
		fclose($dosya);
		
		echo "Kayıt Eklendi...";
	}
?>