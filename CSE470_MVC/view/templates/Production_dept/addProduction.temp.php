<?php include '../inc/header.php'; ?>
<h1 class="display-1" align="center"><?php echo $style_num;?></h1>
<div class="jumbotron">
	<h4> <?php echo "$color:"; ?> </h4>
	<form action="#" method="post">
		<table class="table">
			<tbody>
				<tr>
					<td><input type="Date" class="form-control" name="date" placeholder="" required="required"></td>
					<td></td>
				</tr>
				<tr>
					<th>S:</th>
					<td><input type="Number" class="form-control" name="sQnt" placeholder="Production of S"></td>
				</tr>
				<tr>
					<th>M:</th>
					<td><input type="Number" class="form-control" name="mQnt" placeholder="Production of M"></td>
				</tr>
				<tr>
					<th>L:</th>
					<td><input type="Number" class="form-control" name="lQnt" placeholder="Production of L"></td>
				</tr>
				<tr>
					<th>XL:</th>
					<td><input type="Number" class="form-control" name="xlQnt" placeholder="Production of XL"></td>
				</tr>
			</tbody>
		</table>
		<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit", value="set">Submit</button>
	</form>
</div>



<?php include '../inc/footer.php'; ?>
