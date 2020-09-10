<?php include '../inc/header.php'; ?>

<h1 class="display-1" align="center">Select Client</h1>
<br>


<div class="jumbotron">
	<form action="#" method="post">
		

		<?php foreach ($clients as $client): ?>
			<div class="form-check">
				<label style="font-size: 1.5rem">
					<strong><input type="radio" name="client" value="<?php echo "$client->client_id" ?>">
					<?php echo "$client->company_name"; ?> </strong>
				</label>
			</div>
		<?php endforeach ?>

		<br><br>
		<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="next", value="set">Next</button>
	</form>

	<br>
	<a class="btn btn-success" href="newClient.php">New Client</a>
</div>

<?php include '../inc/footer.php'; ?>
