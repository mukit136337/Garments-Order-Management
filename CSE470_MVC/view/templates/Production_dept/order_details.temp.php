<?php include '../inc/header.php'; ?>

<h1 class="display-1" align="center"><?php echo $style_num;?></h1>
<h5 align="center" style="color: green"><?php echo $order->status ; ?> </h5>

<div class="col-md-<?php echo $cnt; ?>">
	<div class="card border-primary mb-5">
		<div class="card-header"><h4>Quantity Details:</h4> </div>
		<table class="table table-hover">
			<tr> 
				<th>  </th>
				<?php foreach ($sizes as $size): ?>
					<th> <?php
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
								echo "<td>0</td>";
							}
							echo "<td>" . $qnt->quantity . "</td>" ;
						}
						$i = ($i+1)%16;
					}
					while ($i!=count($sizes)) {
						echo "<td>0</td>" ;
						$i = ($i+1)%16;
					}

					?>
				</tr>
			<?php endforeach ?>


		</table>
		
	</div>
</div>
<h3><u> Production: </u></h3>
<br>

<?php foreach ($colors as $color): ?>
	
<?php $pro = $production[$color->color] ?>

<div class="card border-primary mb-3">

	<div class="card-header">
		<div class="row">
			<div class="col-md-10"><h4><?php echo $color->color; ?>:</h4></div>
			<div class="col-md-2">
			<a class="btn btn-primary" href="addProduction.php?style_num=<?php echo $style_num ?>&color=<?php echo $color->color ?>">
				Add Production
			</a></div>
		</div>
		
		
	</div>
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
								echo "<td>0</td>" ;
							}
						} else {
							echo "<td>0</td>" ;
						}
					?>
				<?php endforeach ?>
			</tr>
		<?php endforeach ?>

		
	</table>
	
</div>

<?php endforeach ?>







<?php include '../inc/footer.php'; ?>
