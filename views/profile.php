 <?php 
 	require "../partials/template.php";

 	function get_title(){
 		echo "Profile";
 	}

 	function get_body_content(){
 		require "../controllers/connection.php";

 ?>
 	<h1 class="text-center py-5">
 		Profile Page
 	</h1>

 	<div class="container">
 		<div class"col-lg-6>
 			<h3>Accoutn Info: </h3>

 		</div>
 		<div class"col-lg-6>
 			<form  action="" method="POST">
 				<div class="form-group">
 					<label>
 						First Name:
 					</label>
 					<input type="text" name="address1" class="form-control" value="<?php echo $_SESSION['user']['firstName']?>">
 				</div>
 				<div class="form-group">
 					<label>
 						Last Name: 
 					</label>
 					<input type="text" name="address2" class="form-control" value="<?php echo $_SESSION['user']['lastName'] ?>">
 				</div>
 				<div class="form-group">
 					<label>
 						Email:
 					</label>
 					<input type="text" name="city" class="form-control" value="<?php echo $_SESSION['user']['email'] ?>">
 				</div>
 				<button class="btn btn-info" type="submit">
 					Update
 				</button>
 				
 			</form>


 			<h3>Addresses: </h3>
 			<ul>
 				<?php
 					$userId = $_SESSION['user']['id'];

 					$address_query = "SELECT * FROM addresses WHERE user_id = $userId";


 					$addresses = mysqli_query($conn, $addresses_query);

 					foreach( $addresses as $indiv_address){
 						?>
 						<li>
 							 <?php echo $indiv_address['address1'].",".$indiv_address['address2']."<br/>". $indiv_address['city']. " " . $indiv_address['zipCode']?>
 						</li>
 						<?php 
 							}
 						?>
 				?>
 			</ul>
 			<form  action="../controllers/add-address-process.php" method="POST">
 				<div class="form-group">
 					<label>
 						Address 1:
 					</label>
 					<input type="text" name="address1" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>
 						Address 2:
 					</label>
 					<input type="text" name="address2" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>
 						City:
 					</label>
 					<input type="text" name="city" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>
 						Zipcode:
 					</label>
 					<input type="text" name="zipCode" class="form-control">
 				</div>
 				<input type="hidden" name="user_id" value="<?php echo $userId?>">
 				<button class="btn btn-info" type="submit">
 					Add Address
 				</button>
 			</form>
 		</div>

 	</div>

 <?php 
 	}
 ?>