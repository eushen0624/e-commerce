<!DOCTYPE html>
<html>
<head>
	<title><?php get_title(); ?></title>
	<!-- bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">
</head>
<body>
	
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="../index.php">COFFEE FAVORITES</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="catalog.php">Product Menu <span class="sr-only">(current)</span></a>
	      </li>
	      <?php 
		    	session_start();
		    	if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1){
		    ?>
				<li class="nav-item">
		        	<a class="nav-link" href="add-item.php">Add Item</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="add-item.php">Transactions</a>
		      </li>
		    <?php
		    	}else{
		    ?>
				<li class="nav-item">
			        <a class="nav-link" href="cart.php">Cart <span class="badge bg-warning" id="cartCount">
			        <?php 

			        	if(isset($_SESSION['cart'])){
			        		echo array_sum($_SESSION['cart']);
			        	}else{
			        		echo 0;
			        	}
			        ?>
			        	</span>
			        </a>
		    	</li>
		    <?php
		    	}

		    	if(isset($_SESSION['user'])){
		    ?>
					<li class="nav-item">
		        <a class="nav-link" href="profile.php">Hello <?php echo $_SESSION['user']['firstName'] ?>!</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../controllers/logout-process.php">Logout</a>
		      </li>
		    <?php
		    	}else{
		    ?>
						<li class="nav-item">
		        	<a class="nav-link" href="login.php">Login</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="register.php">Register</a>
		      	</li>
		    <?php
		    	}
		    ?>	      
		    </ul>
		  </div>
	</nav>

	<!-- PAGE CONTENT -->
	<?php 
		get_body_content();
	?>

	<!-- FOOTER -->

	<footer class="page-footer font-small bg-dark page-footer-dark page-footer-fixed-bottom"
	>
		<div class="footer-copyright text-center py-3">2020 Made By 1:B55
			
		</div>
	</footer>

	<!-- JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>