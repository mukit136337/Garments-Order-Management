<!DOCTYPE html>
<html>
<head>
	<title>Order Lists</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/_assets/css/custom.min.css"> -->
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.css">

</head>

<body>
	<?php 
	if(!isset($_SESSION['username'])){
		redirect('Login_V3/index.php?','session error','error');
	}
	?>

	
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">BONGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0" action="../../Home.html"> -->
				<form class="form-inline my-2 my-lg-0" action="http://localhost/CSE470-MVC/Login_V3/index.php">
					<h3 class="mr-sm-2" style="color: white"> <?php echo $_SESSION['username']; ?> </h3>
			    	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button>
			    </form>
    
			</div>
		</nav>

		


		<div class="container">
	<!-- <?php displayMessage(); ?> -->