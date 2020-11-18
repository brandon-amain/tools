 <?php 
 	$title = $_GET['title'];
 	$id = $_GET['id'];
  	$name = $_GET['name'];

	$title1 = $_REQUEST['title1'];
	$link1 = $_REQUEST['link1'];
	$image1 = $_REQUEST['image1'];

	$title2 = $_REQUEST['title2'];
	$link2 = $_REQUEST['link2'];
	$image2 = $_REQUEST['image2'];

	$title3 = $_REQUEST['title3'];
	$link3 = $_REQUEST['link3'];
	$image3 = $_REQUEST['image3'];

	$allNew = $_REQUEST['allnew'];

?>
  <div class="col-sm-12">
	<div class="row">
		<h2>One Product / Two Accessory Code</h2>
		<div class="col-sm-8">
			<textarea rows="20" cols="75" name="preview">
	  			<?php require 'templates/newproduct/2.php'; ?>
			</textarea>
		</div>
	</div>
</div>