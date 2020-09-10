<?php include '../inc/header.php'; ?>
<?php include '../inc/search_bar.php'; ?>




<!-- 3 Tab Order List -->

<link rel="stylesheet" type="text/css" href="css/style_tab.css">

<?php if (!isset($_POST['submit'])): ?>
	<div class="tab">
		<button class="tablinks" id="onGoing-btn" onclick="openCity(event, 'ongoing')">On Going</button>
		<button class="tablinks" onclick="openCity(event, 'upcomming')">Up Comming</button>
		<button class="tablinks" onclick="openCity(event, 'completed')">Completed</button>
	</div>

	<!-- Tab content -->
	<div id="ongoing" class="tabcontent">
		<?php 
		$x = 0;
		foreach ($orders['ongoing'] as $order): 
			if($x==0){
				$x = 1;
			} else {
				echo '<hr class="my-4">';
			}
			?>
			<div class="row ">
				<div class="col-md-10">
					<h2> <?php echo $order->style_num; ?> </h2>
					<blockquote class="blockquote">
						<p class="mb-0"><?php echo $order->description; ?></p>
						<footer class="blockquote-footer"><?php echo $order->company_name; ?></footer>
					</blockquote>
				</div>

				<div class="col-md-2">
					<a  class="btn btn-secondary" href="order_details.php?style_num=<?php echo$order->style_num;?>">View</a>
					<!-- <a  class="btn btn-secondary" href="status.php?style_num=<?php echo$order->style_num;?>">Status</a> -->

					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<button type="button" class="btn btn-info">Stat</button>
						<div class="btn-group" role="group">
							<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
								<a class="dropdown-item" href="status.php?x=On Going&style_num=<?php echo$order->style_num;?>">On Going</a>
								<a class="dropdown-item" href="status.php?x=Up Comming&style_num=<?php echo$order->style_num;?>">Up Comming</a>
								<a class="dropdown-item" href="status.php?x=Completed&style_num=<?php echo$order->style_num;?>">Completed</a>
							</div>
						</div>
					</div>

					
				</div>
			</div>
			
		<?php endforeach;
		if($x==0):
			?>
			<div class="alert alert-dismissible alert-warning">
				<h4 class="alert-heading">No result found!</h4>
				<p class="mb-0">There is no on going order. Please add or update an order</p>
			</div>
		<?php endif ?>
		
		<br>
	</div>


	<div id="upcomming" class="tabcontent">
		<?php 
		$x = 0;
		foreach ($orders['upcomming'] as $order): 
			if($x==0){
				$x = 1;
			} else {
				echo '<hr class="my-4">';
			}
			?>
			<div class="row ">
				<div class="col-md-10">
					<h2> <?php echo $order->style_num; ?> </h2>
					<blockquote class="blockquote">
						<p class="mb-0"><?php echo $order->description; ?></p>
						<footer class="blockquote-footer"><?php echo $order->company_name; ?></footer>
					</blockquote>
				</div>
				<div class="col-md-2">
					<a  class="btn btn-secondary" href="order_details.php?style_num=<?php echo$order->style_num;?>">View</a>
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<button type="button" class="btn btn-info">Stat</button>
						<div class="btn-group" role="group">
							<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
								<a class="dropdown-item" href="status.php?x=On Going&style_num=<?php echo$order->style_num;?>">On Going</a>
								<a class="dropdown-item" href="status.php?x=Up Comming&style_num=<?php echo$order->style_num;?>">Up Comming</a>
								<a class="dropdown-item" href="status.php?x=Completed&style_num=<?php echo$order->style_num;?>">Completed</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;
		if($x==0):
			?>
			<div class="alert alert-dismissible alert-warning">
				<h4 class="alert-heading">No result found!</h4>
				<p class="mb-0">There is no up comming order. Please add or update an order</p>
			</div>
		<?php endif ?>
		<br>
	</div>


	<div id="completed" class="tabcontent">
		<?php 
		$x = 0;
		foreach ($orders['completed'] as $order): 
			if($x==0){
				$x = 1;
			} else {
				echo '<hr class="my-4">';
			}
			?>
			<div class="row ">
				<div class="col-md-10">
					<h2> <?php echo $order->style_num; ?> </h2>
					<blockquote class="blockquote">
						<p class="mb-0"><?php echo $order->description; ?></p>
						<footer class="blockquote-footer"><?php echo $order->company_name; ?></footer>
					</blockquote>
				</div>
				<div class="col-md-2">
					<a  class="btn btn-secondary" href="order_details.php?style_num=<?php echo$order->style_num;?>">View</a>
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<button type="button" class="btn btn-info">Stat</button>
						<div class="btn-group" role="group">
							<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
								<a class="dropdown-item" href="status.php?x=On Going&style_num=<?php echo$order->style_num;?>">On Going</a>
								<a class="dropdown-item" href="status.php?x=Up Comming&style_num=<?php echo$order->style_num;?>">Up Comming</a>
								<a class="dropdown-item" href="status.php?x=Completed&style_num=<?php echo$order->style_num;?>">Completed</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;
		if($x==0):
			?>
			<div class="alert alert-dismissible alert-warning">
				<h4 class="alert-heading">No result found!</h4>
				<p class="mb-0">There is no completed order. Please add or update an order</p>
			</div>
		<?php endif ?>
		<br>
	</div>


	
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		document.getElementById('onGoing-btn').click();
	</script>

	<!-- / 3 Tab Order List -->
	
<?php endif ?>

<br><br><br>
<?php include '../inc/footer.php'; ?>