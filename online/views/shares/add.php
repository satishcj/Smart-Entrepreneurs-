<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Products</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Product Name</label>
    		<input type="text" name="title" class="form-control" required />
    	</div>
    	<div class="form-group">
    		<label>Product Id</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Quantity Available</label>
    		<input type="text" name="link" class="form-control" required/>
    	</div>
    	<div class="form-group">
    		<label>selling_price</label>
    		<input type="text" name="selling_price" class="form-control" required />
    	</div>
    	<div class="form-group">
    		<label>Cost Price</label>
    		<input type="text" name="cost_price" class="form-control" required/>
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>
