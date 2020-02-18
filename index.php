<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootswatch -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.css">
</head>
<body>
	<header>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!-- Nav bar Bootswatch -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="#">Coffee Favorites</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Products Menu <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="add-item.php">Add Product</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Cart</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<div class="vh- d-flex justify-content-center align-items-center flex-column" style="height: 75vh;">
			<h1>Welcome to Coffee Favorites!</h1>
			<a href="views/catalog.php" class="btn btn-primary">View Menu</a>	
		</div>
		
	</header>

	<section>
	 	<h1 class="text-center p-5">Featured Coffees</h1>
	 		<div class="container">
	 			<div class="row">
	 	 				<div class="col-lg-4 py-2">
	 	 					<div class="card">
	 	 						<img src="assets/lib/<?php echo $products_array[$i]["image"]?>" class="card-img-top img-fluid" height="450px">
	 	 						<div class="card-body">
	 	 							<h5 class="card-title"></h5>
	 	 							<p class="card-text">Price: Php </p>
	 	 							<p class="card-text">Description: </p>
	 	 						</div>
	 	 					</div>
	 	 				</div>
	 	 				
	 			</div>
	 		</div>
	 	

	</section>
</body>
</html>