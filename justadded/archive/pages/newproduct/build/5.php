<div class="col-sm-12">
	<div class="row">
		<h2>Three Product Template</h2>
		<div class="col-sm-12">
			<form action="result.php?id=<?php echo $id; ?>&title=<?php echo $title; ?>&name=<?php echo $name; ?>" method="POST">
				<div class="form-row">
					<h3>Product 1</h3>
			    	<div class="col-sm-4">
			     		<input type="text" class="form-control" placeholder="Product Title" maxlength="58" name="title1">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Image Link" name="image1">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Link" name="link1">
			    	</div><br /><br />
			    	<h3>Product 2</h3>
			    	<div class="col-sm-4">
			     		<input type="text" class="form-control" placeholder="Product Title" maxlength="58" name="title2">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Image Link" name="image2">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Link" name="link2">
			    	</div><br /><br />
			    	<h3>Product 3</h3>
			    	<div class="col-sm-4">
			     		<input type="text" class="form-control" placeholder="Product Title" maxlength="58" name="title3">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Image Link" name="image3">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Link" name="link3">
			    	</div><br /><br />
			    	<h3>Product 4</h3>
			    	<div class="col-sm-4">
			     		<input type="text" class="form-control" placeholder="Product Title" maxlength="58" name="title4">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Image Link" name="image4">
			    	</div>
			    	<div class="col-sm-4">
			      		<input type="text" class="form-control" placeholder="Product Link" name="link4">
			    	</div>

			    	<br /><br />
			  	</div>
			    <br /><br />
			    <div class="form-row">
					<h3>Link To All New Product</h3>
			    	<div class="col-sm-12">
			     		<input type="text" class="form-control" placeholder="All New Product Link" name="allnew">
			    	</div>
			    	<br /><br /><br /><br />
			    	<button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
			  	</div>
			</form>
		</div>
	</div>
</div>