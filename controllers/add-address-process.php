<?php 
	require "connection.php";

	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipCode'];
	$user_id = $_POST['user_id'];
	$isPrimary = 0;

	//create validation here


	$address_query = "INSERT INTO addresses(address1, address2, city, zipCode, user_id, isPrimary) VALUES ('$address1', '$address2', '$city', $zipCode, $user_id, $isPrimary )";

	$result = mysqli_query($conn, $address_query);

	header("Location: ". $_SERVER['HTTP_REFERER']);
?>