<?php 
	require "connection.php";

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$role_id = 2;

	// check if email is already taken
	// if no duplicate, save. if there is error.

	$duplicate_query = "SELECT * FROM users WHERE email = '$email'";

	$duplicate = mysqli_query($conn, $duplicate_query);

	if(mysqli_num_rows($duplicate)>0){
		die("user_exists");
	}else{
		$create_user_query = "INSERT INTO users(firstName, lastName, email, password, role_id) VALUES ('$firstName', '$lastName', '$email', '$password', $role_id)";

		var_dump($create_user_query);

		$result = mysqli_query($conn, $create_user_query);
	}

?>