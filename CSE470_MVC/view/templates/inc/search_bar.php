<!-- Search bar -->
<div class="jumbotron">
  <h1 class="display-1" align="center">Search</h1>
  <form action="#" method="post">
  	<div class="row">
  		<div class="col-md-10">
  			<input type="text" class="form-control" name="search_style_num" placeholder="Enter Style Number">
  		</div>
  		<div class="col-md-2">
  			<button class="btn btn-secondary my-2 my-sm-0" type="submit" name="submit", value="set">Find</button>  			
  		</div>
  	</div>
  </form>
</div>

<!-- /Search bar -->

<?php if (isset($_POST['submit'])): ?>
  <?php 
  if(!is_object($orders)):
    ?>
    <div class="alert alert-dismissible alert-warning">
      <h4 class="alert-heading">No result found!</h4>
      <p class="mb-0">There is no on going order. Please add or update an order</p>
    </div>
  <?php endif ?>
  <?php if (is_object($orders)): ?>
    
  

    <div class="row ">
      <div class="col-md-10">
        <h2> <?php echo $orders->style_num; ?> 
        <small class="text-muted">(<?php echo $orders->status; ?>) </small>
        </h2>
        <blockquote class="blockquote">
          <p class="mb-0"><?php echo $orders->description; ?></p>
          <footer class="blockquote-footer"><?php echo $orders->company_name; ?></footer>
        </blockquote>
      </div>

      <div class="col-md-2">
        <a  class="btn btn-secondary" href="order_details.php?style_num=<?php echo$orders->style_num;?>">View</a>
      </div>
    </div>
  <?php endif ?>




<?php endif ?>

