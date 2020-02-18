<?php 
	require "connection.php";
	session_start();

	$userId = $_SESSION['user']['id'];
	$total = $_POST['totalPayment'];
	$payment_id  = 0;
	$status_ie = 0;

	if(isset($_POST['fromPaypal'])){
		
		$payment_id = 2;
		$status_id = 2;
	}

		$order_query ="INSERT INTO orders(total, user_id, payment_id, status_id) VALUES ($total, $userId, $payment_id, $status_id)";

		$order = mysqli_query($conn, $order_query);

		foreach($_SESSION['cart'] as $itemId => $quantity){
			$item_query = "INSERT INTO items_order(order_id, item_id, quantity) VALUES ($orderId, $itemId, $quantity)";
		}

?>