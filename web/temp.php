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
						<h2>Date colectate de DHT22</h2>
						<p> Temperatură și umiditate: </p>
					</header>
					
					<script type="text/javascript" src="https://www.google.com/jsapi"></script>
 					<script type="text/javascript">
 					google.load("visualization", "1", {packages:["corechart"]});
 					google.setOnLoadCallback(drawChart);
					function drawChart() {
 					var data = google.visualization.arrayToDataTable([

 					['Data', 'Temperatura', 'Umiditate'],
 					<?php 
 					$con = mysqli_connect("localhost","root","password","temps");
 					$query = "SELECT CONCAT(data,' ',timp) AS dat, temperatura, umiditate FROM temperatura ORDER BY id DESC LIMIT 300";

 					$exec = mysqli_query($con,$query);
 					while($row = mysqli_fetch_array($exec)){

 						echo "['".$row['dat']."',".$row['temperatura'].",".$row['umiditate']."],";
 					}
 					?>
 
 					]);

 					var options = {
 					title: 'Grafic Temperatura si Umiditate'
 					};
 					var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 					chart.draw(data, options);
 					}
 					</script>
					</head>
					<body>
 					
 					<div id="columnchart" style="width: 900px; height: 500px;"></div>
					</body>
					<br /> <br />

					<?php
					$db_host = 'localhost'; 
					$db_user = 'root'; 
					$db_pass = 'password'; 
					$db_name = 'temps'; 

					$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
					if (!$conn) {
						die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
						}

					$sql = 'SELECT * FROM temperatura ORDER BY id DESC LIMIT 50';

					$query = mysqli_query($conn, $sql);

					if (!$query) {
						die ('SQL Error: ' . mysqli_error($conn));
						}
					?>
				
			</head>
			<body>
				<h1>Tabel </h1>
				<table class="data-table">
					<caption class="title">Monitorizare temperatura si umiditate</caption>
					<thead>
						<tr>
							<th>ID</th>
							<th>DATA</th>
							<th>TIMP</th>
							<th>TEMPERATURĂ</th>
							<th>UMIDITATE</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while ($row = mysqli_fetch_array($query))
					{
					echo '<tr>
						<td>'.$row['id'].'</td>
						<td>'.$row['data'].'</td>
						<td>'.$row['timp'].'</td>
						<td>'.$row['temperatura'].' grade</td>
						<td>'.$row['umiditate'].' %</td>
					</tr>';
					}?>
					</tbody>
				</table>
			</body>


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
