<?php include 'inc/header.php'; ?>

<h1 class="display-1" align="center"><?php echo $style_num;?></h1>
<h5 align="center" style="color: green"><?php echo $order->status ; ?> </h5>
<h3><u> Client Info: </u></h3>



<div class="container">
	<div class="col-md-8">
		<ul class="list-group">
			
			<li class="list-group-item"> <strong>ID: </strong> <?php echo $client->client_id . "(" . $client->type . ")" ; ?></li>
			<li class="list-group-item"> <strong>Name: </strong> <?php echo $client->company_name ; ?> </li>
			<li class="list-group-item"> <strong>Email: </strong> <?php echo $client->email ; ?> </li>
			<li class="list-group-item"> <strong>Contact No: </strong> <?php echo $client->contact_num ; ?> </li>
			<li class="list-group-item"> <strong>Location: </strong> <?php echo $client->location ; ?> </li>
			
		</ul>	
	</div>
</div>
<br>

	
<div class="col-md-8"> 
	<h3><u> Order Info: </u></h3>
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item"> <strong>OPD: </strong> <?php echo $order->order_placement_date ; ?> </li>
			<li class="list-group-item"> <strong>TOD: </strong> <?php echo $order->time_of_delivery ; ?> </li>
			<li class="list-group-item"> <strong>Production Cost: </strong> 70 </li>
			<li class="list-group-item"> <strong>Unit Price: </strong> <?php echo $order->unit_price ; ?> </li>
			<li class="list-group-item"> <strong>Total quantity: </strong> <?php echo $total_qnt ; ?> </li>
			<li class="list-group-item"> <strong>Total Value: </strong> <?php echo $total_qnt * $order->unit_price ; ?> </li>
		</ul>
		<br>
	</div>


</div>

<div class="card border-primary mb-5">
	<div class="card-header"><h4>Quantity Details:</h4> </div>
	<table class="table table-hover">
		<tr> 
			<th>  </th>
			<?php $arr = array('S','M','L','XL', 'XXL', '3XL', '4XL', '5XL', '6XL', '7XL', '8XL', '9XL', '10XL', '11XL', '12XL');?>
			<?php foreach ($arr as $a): ?>
				<th> <?php echo $a; ?></th>
			<?php endforeach ?>
		</tr>
		<?php foreach ($colors as $color): ?>
			<tr>
				<th> <?php echo $color->color; ?> </th>
				<?php
				$i = 0;
				foreach ($quantity[$color->color] as $qnt) {
					if($qnt->size == $sizes[$i]->size){
						echo "<td>" . $qnt->quantity . "</td>" ;
					} else {
						while ($qnt->size != $sizes[$i]->size) {
							$i = ($i+1)%16;
							echo "<td> </td>";
						}
						echo "<td>" . $qnt->quantity . "</td>" ;
					}
					$i = ($i+1)%16;
				}
				while ($i!=15) {
					echo "<td></td>" ;
					$i = ($i+1)%16;
				}

				?>
			</tr>
		<?php endforeach ?>


	</table>
</div>



<h3><u> Production: </u></h3>
<br>

<?php foreach ($colors as $color): ?>
	
<?php $pro = $production[$color->color] ?>

<div class="card border-primary mb-3">

	<div class="card-header"><h4><?php echo $color->color; ?>:</h4></div>
	<table class="table table-hover">
		<tr>
			<th> </th> <?php $colCnt = 1; ?>
			<?php foreach ($col_size[$color->color] as $size): ?>
				<th> <?php
				$colCnt++;
				if($size->size == 1){
					echo "S";
				} elseif ($size->size == 2) {
					echo "M";
				} elseif ($size->size == 3) {
					echo "L";
				} elseif ($size->size == 4) {
					echo "XL";
				} elseif ($size->size == 5) {
					echo "XXL";
				} else {
					echo $size->size;
				}
				 ?> </th>
			<?php endforeach ?>
		</tr>
		
		<?php 
		$i=0;
		foreach ($col_date[$color->color] as $date): ?>
			<tr>
				<th><?php echo $date->date; ?></th>
				<?php foreach ($col_size[$color->color] as $size): ?>
					
					<?php 
						if(isset($pro[$i])){
							if ($pro[$i]->size == $size->size && $pro[$i]->date == $date->date){
								echo "<td>" . $pro[$i]->production . "</td>" ;
								$i++;
							} else {
								echo "<td>" . "</td>" ;
							}
						} else {
							echo "<td>" . "</td>" ;
						}
					?>
				<?php endforeach ?>
			</tr>
		<?php endforeach ?>

		
	</table>
	
</div>

<?php endforeach ?>

<div class="card border-primary mb-3">

	<div class="card-header"><h4>Summery:</h4></div>
	<table class="table table-hover">
		<tr>
			<th>Red:</th>
			<td>2700/4500</td>
		</tr>
		<tr>
			<th>Yellow:</th>
			<td>2700/4500</td>
		</tr>
		<tr>
			<th>Total:</th>
			<td>5400/9000</td>
		</tr>
	</table>
	
</div>





<?php include 'inc/footer.php'; ?>
