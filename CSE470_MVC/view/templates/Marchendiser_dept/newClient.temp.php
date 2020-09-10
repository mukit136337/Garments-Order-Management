<?php include '../inc/header.php'; ?>

<h1 class="display-1" align="center">New Client</h1>

<form action="#" method="post">
	<div class="row">
		<div class="col-md-1"><h4>Name: </h4></div>
		<div class="col-md-11"><input type="text" class="form-control" name="Name" placeholder="Enter Client Name"></div>
	</div>
	<br>

	<div class="row">
		<div class="col-md-1"><h4>ID: </h4></div>
		<div class="col-md-11"><input type="text" class="form-control" name="ID" placeholder="Enter Client ID"></div>
	</div> 
	<br>

	<div class="row">
		<div class="col-md-1"><h4>Email: </h4></div>
		<div class="col-md-11"><input type="text" class="form-control" name="Email" placeholder="Enter Client Email"></div>
	</div> 
	<br>

	<div class="row">
		<div class="col-md-1"><h4>Contact Number: </h4></div>
		<div class="col-md-11"><input type="text" class="form-control" name="Contact_Number" placeholder="Enter Client Contact Number"></div>
	</div> 
	<br>

	<div class="row">
		<div class="col-md-1"><h4>Location: </h4></div>
		<div class="col-md-11"><input type="text" class="form-control" name="Location" placeholder="Enter Client Location"></div>
	</div> 

			
	 



	<br><br>
	<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit", value="set">Insert</button>
</form>


<?php include '../inc/footer.php'; ?>