<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		<?php
			if(isset($_GET["kapat"]))
			{
				setcookie("oturum","",time()-3600);
				header("refresh:2; url=oturumac.php");
				echo "Oturum Kapandı!...";
				
			}
			else
			{
				if(empty($_COOKIE["oturum"]))
				{
					header("refresh:0; url=oturumac.php");
				}
				else
				{
					setcookie("oturum","acik",time()+60);
		?>
		
		<a href="index.php?kapat=1"><button>OTURUMU KAPAT</button></a>
		<h2>Lorem ipsum</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar enim elit, ac commodo ex pharetra quis. Cras venenatis metus quis ante iaculis, ut semper magna ullamcorper. Suspendisse dictum feugiat ipsum eget pellentesque. Cras felis eros, mattis lobortis accumsan ac, feugiat nec tortor. Aenean sed porttitor risus. Curabitur iaculis ex sit amet odio fermentum, ut mollis eros iaculis. In in felis nibh. Vestibulum consequat mi sit amet arcu ultricies tristique. Curabitur mi metus, laoreet non aliquam ac, vulputate quis ante. Duis elementum justo et nisi molestie commodo. Pellentesque molestie vitae tellus nec tincidunt. Maecenas sed est sed libero imperdiet pharetra.
		</p>
		<p>
			Etiam ac faucibus elit, tempus fermentum mauris. Cras in semper dui, ut placerat magna. Praesent non nisi posuere, gravida est et, suscipit felis. In tincidunt, nibh in blandit feugiat, sem ex consequat ante, eget condimentum lorem arcu vel ex. Donec tortor ex, efficitur vel varius a, porta quis sem. Nullam porta, justo vitae dignissim sodales, lorem massa consequat eros, vel semper ipsum nunc porta leo. In enim metus, pharetra maximus diam eu, fringilla viverra ex. Donec sed arcu blandit, malesuada est eu, viverra ipsum. Proin viverra id urna in tristique. Vestibulum accumsan aliquam ultricies.
		</p>

		<p>
			Ut id libero ornare, bibendum elit fringilla, ultrices velit. Nulla bibendum in arcu ut porta. Nunc lacus ante, condimentum aliquet tempor porttitor, sagittis ut dolor. Nunc massa nisi, volutpat ut nisl rhoncus, aliquam vulputate justo. Aliquam quis erat in diam mollis iaculis ac nec nulla. Donec facilisis lectus ligula, viverra egestas augue ultrices sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer scelerisque porta odio, ut condimentum mauris gravida id. Etiam gravida mollis urna. Etiam fermentum quam vitae lectus efficitur, id rhoncus risus fringilla. Aenean at eros pharetra, congue lectus at, pharetra tortor. Phasellus venenatis, mi vitae eleifend condimentum, velit nunc sollicitudin est, in fringilla nunc arcu non lorem. Sed ac tristique dui. In dignissim ultrices lorem ut lobortis. Proin massa dui, maximus ut sem vitae, ultricies venenatis metus.
		</p>

		
		<?php
				}
			}
		?>
		
	</body>
</html>