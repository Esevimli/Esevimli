<table border="1" cellspacing="0">
			<tr>
				<th>NUMARA</th>
				<th>AD</th>
				<th>ADRES</th>
				<th>MAAŞ</th>
			</tr>
<?php
	if(!file_exists("kayit.txt")) die("Kayıt Dosyası Yok!...");
		
			

			$dosya=fopen("kayit.txt","r");
			flock($dosya,LOCK_EX);
			
			$i=1; $kayit="";
			while(!feof($dosya))//file end of file dosya sonuna gelinip gelinmediğini kontrol eder
			{
				if($i==1) $kayit.="<tr>";
				$kayit.="<td>".fgets($dosya)."</td>";
				$i++;
				if($i>4) 
				{
					$i=1;  $kayit.="</tr>";
				}
					
			}
	
			$k=strripos($kayit,"<tr>");
			$kayit=substr($kayit,0,$k);
			
			echo $kayit;
			
			flock($dosya,LOCK_UN);
			fclose($dosya);
?>
	</table>