<?php
 $usr="admin";
 $pwd="sistem";

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

$username=$_POST['username'];
$password=$_POST['password'];

 
			if(($username==$usr) && ($password==$pwd) ){

							header('Location: home.html');

				}else{

							echo '<br> Acces restrictionat !';
							}
	}else{
			echo "<br>Completeaza toate spatiile!";
			}
?>