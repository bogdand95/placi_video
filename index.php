<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0">-->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image" href="images/title.ico">
	<title>Istoria plăcilor video</title>

</head>
<body>
<header>
<div id="logo" class="container">
	<h1><a href="index.php?section=acasa">Istoria plăcilor video</a></h1>
</div>
</header>
<nav>
<div id="menu-wrapper">
	<div id="menu" class="container">
		<ul>
			<li class="menuitem"><a href="?section=acasa">Acasă</a></li>
			<li class="menuitem"><a href="?section=generalitati">Generalități</a></li>
			<li class="menuitem"><a href="?section=istoric">Istoric</a></li>
			<li class="menuitem"><a href="?section=viitor">Viitorul GPU</a></li>
			<li class="menuitem"><a href="?section=quiz">Quiz</a></li>
			<li class="menuitem"><a href="?section=userinfo">User Info</a></li
		</ul>
	</div>
</div>
</nav>
<section>
<div id="page" class="container">
	<div id="box1">
		<div class="interior">

			<?php
			if(!isset($_GET['section'])){
				include 'main.php';
			}
			else{
			if($_GET['section']=='acasa'){
				include 'acasa.php';
				}
			if($_GET['section']=='generalitati'){
				include 'generalitati.php';
				}
			if($_GET['section']=='istoric'){
				include 'istoric.php';
			}
			if($_GET['section']=='quiz'){
				include 'quiz.php';
			}
			if($_GET['section']=='viitor'){
				include 'viitor.php';
				}
			if($_GET['section']=='userinfo'){
				include 'detalii.php';
			}
			}


		?>
		</div>
	</div>
	<div id="box2">
		<h2>Link-uri utile</h2>
		<ul class="style1">
			<li class="first"><a href="http://www.videocardz.com">Videocardz</a></li>
			<li><a href="http://www.gpuboss.com">GPUBoss</a></li>
			<li><a href="http://www.ozone3d.net/benchmarks/fur/">GPU Stress Test</a></li>
			<li><a href="http://www.videocardbenchmark.net/">Videocard Benchmarks</a></li>
			<li><a href="http://www.nvidia.com/content/global/global.php">NVidia</a></li>
			<li><a href="http://www.amd.com/en-us/products/graphics">AMD</a></li>
		</ul>
	</div>

</div>
</section>
<footer>
<div id="footer" >
	<p>&copy; 2017 All rights reserved. Design by Bogdan Dorneanu. </p>
</div>
</footer>
</body>
</html>
