<?php 
	$host = "localhost"; //the host that we will use.
	$db_username = "root"; //the username for the host
	$db_password = ""; //the password for the host.
	$db_name = "b55Ecommerce";


	//to create the connection
	$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

	//to check the connection

	if(!$conn){
		die("Connection Failed: " . mysqli_error($conn));
	}
 ?>

