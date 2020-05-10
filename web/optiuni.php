<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistem de achiziție de date de Robert-Răzvan ISPIRLIU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="home.html">Sistem de achiziție de date</a></strong> </h1>
				<nav id="nav">
					<ul>
					     <li><a href="home.html">Acasă</a></li>
					     <li><a href="project.html">Despre Proiect</a></li>
					     <li><a href="nemo.php">Nemo96HD</a></li>
					     <li><a href="temp.php">DHT22</a></li>
				             <li><a href="pir.php">PIR</a></li>
				             <li><a href="optiuni.php">Optiuni</a></li>	
					     <li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</header>

			
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
						<br /> <br />
					<header class="major special">
						<h2>Optiuni ale sistemului</h2>
						<p> Stergere valori </p>
					</header>
			<?php
				if($_GET['click']){
   
					$db_host = 'localhost'; 
					$db_user = 'root'; 
					$db_pass = 'password'; 
					$db_name = 'temps'; 

					$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
					if (!$conn) {
						die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
						}

					$sql = 'TRUNCATE TABLE tensiune';

					$query = mysqli_query($conn, $sql);

					if (!$query) {
						die ('SQL Error: ' . mysqli_error($conn));
						}
				}
					?>

				<div class="3u 6u(small) 12u$(xsmall)">
				<ul class="actions vertical">
				<li><a href="optiuni.php?click=1" class="button special fit">Sterge valori Nemo 96HD</a></li>
				</ul>
		        	</div>

				<?php
				if($_GET['hau']){
   
					$db_host = 'localhost'; 
					$db_user = 'root'; 
					$db_pass = 'password'; 
					$db_name = 'temps'; 

					$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
					if (!$conn) {
						die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
						}

					$sql = 'TRUNCATE TABLE temperatura';

					$query = mysqli_query($conn, $sql);

					if (!$query) {
						die ('SQL Error: ' . mysqli_error($conn));
						}
				}
					?>

				<div class="3u 6u(small) 12u$(xsmall)">
				<ul class="actions vertical">
				<li><a href="optiuni.php?hau=1" class="button special fit">Sterge valori DHT22</a></li>
				</ul>
		        	</div>

				<?php
				if($_GET['auu']){
   
					$db_host = 'localhost'; 
					$db_user = 'root'; 
					$db_pass = 'password'; 
					$db_name = 'temps'; 

					$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
					if (!$conn) {
						die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
						}

					$sql = 'TRUNCATE TABLE miscare';

					$query = mysqli_query($conn, $sql);

					if (!$query) {
						die ('SQL Error: ' . mysqli_error($conn));
						}
				}
					?>

				<div class="3u 6u(small) 12u$(xsmall)">
				<ul class="actions vertical">
				<li><a href="optiuni.php?auu=1" class="button special fit">Sterge valori PIR</a></li>
				</ul>
		        	</div>
				

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer"> 
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Robert-Răzvan ISPIRLIU</li>
					</ul>
				</div>
			</footer>

	</body>
</html>
