<?php include '../inc/header.php'; ?>

<h1 class="display-1" align="center"> New Order </h1>
<br>
<div class="jumbotron">
	<form action="#" method="post">
		<div class="row">
			<div class="col-md-3"><h4>Style Number: </h4></div>
			<div class="col-md-9"><input type="text" class="form-control" name="style_num" placeholder="Enter Style Number"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-3"><h4>Unit Price: </h4></div>
			<div class="col-md-9"><input type="text" class="form-control" name="unit_price" placeholder="Enter Unit Price"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-3"><h4>Order Placement Date: </h4></div>
			<div class="col-md-9"><input type="Date" class="form-control" name="opd" placeholder="Enter Order Placement Date"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-3"><h4>Time of Delivery: </h4></div>
			<div class="col-md-9"><input type="Date" class="form-control" name="tod" placeholder="Enter Time of Delivery"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-3"><h4>Description: </h4></div>
			<div class="col-md-9"><input type="text" class="form-control" name="description" placeholder="Enter Description"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-3"><h4>Number of Color: </h4></div>
			<div class="col-md-9"><input type="Number" class="form-control" name="color_qnt" placeholder="Enter Number of Color"></div>
		</div>
		<br>
		<!-- <input style="display: none" type="radio" name="client" value="<?php echo "$client" ?>" checked=""> -->


		<br><br>
		<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="next", value="set">Next</button>
	</form>
</div>

<?php include '../inc/footer.php'; ?>
