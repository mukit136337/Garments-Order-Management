<?php include '../inc/header.php'; ?>
<!-- <?php 
echo "color = ".$color_qnt;
echo "<br>";
echo "$style_num";
echo "<br>";
?> -->

<h1 class="display-1" align="center"> Add Order Quantity </h1>
<br><br>

<form action="#" method="post">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Color Name</th>
				<th scope="col">S</th>
				<th scope="col">M</th>
				<th scope="col">L</th>
				<th scope="col">XL</th>
			</tr>
		</thead>

		<tbody>
			<?php for ($i=0; $i < $color_qnt; $i++): ?>
				<tr>
					<td><input type="text" class="form-control" name="<?php echo 'color'.$i; ?>" placeholder="Color name"></td>
					<td><input type="Number" class="form-control" name="<?php echo 's'.$i; ?>" placeholder="S Quantity"></td>
					<td><input type="Number" class="form-control" name="<?php echo 'm'.$i; ?>" placeholder="M Quantity"></td>
					<td><input type="Number" class="form-control" name="<?php echo 'l'.$i; ?>" placeholder="L Quantity"></td>
					<td><input type="Number" class="form-control" name="<?php echo 'xl'.$i; ?>" placeholder="XL Quantity"></td>
				</tr>
			<?php endfor ?>
		</tbody>
	</table> 
	<br>
	<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="next", value="set">Next</button>

</form>



<?php include '../inc/footer.php'; ?>