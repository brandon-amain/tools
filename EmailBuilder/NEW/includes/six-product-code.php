<?php

$title1 = $_REQUEST['title1'];
$link1 = $_REQUEST['link1'];
$image1 = $_REQUEST['image1'];

$title2 = $_REQUEST['title2'];
$link2 = $_REQUEST['link2'];
$image2 = $_REQUEST['image2'];

$title3 = $_REQUEST['title3'];
$link3 = $_REQUEST['link3'];
$image3 = $_REQUEST['image3'];

$title4 = $_REQUEST['title4'];
$link4 = $_REQUEST['link4'];
$image4 = $_REQUEST['image4'];

$title5 = $_REQUEST['title5'];
$link5 = $_REQUEST['link5'];
$image5 = $_REQUEST['image5'];

$title6 = $_REQUEST['title6'];
$link6 = $_REQUEST['link6'];
$image6 = $_REQUEST['image6'];

$allNew = $_REQUEST['allnew'];

?>

<!-- /col-3 -->
        <div class="col-sm-9">
            <nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item "><a href="../NEW/index.php">Home</a></li>
					<li class="breadcrumb-item "><a href="../NEW/new.php">New Product Templates</a></li>
					<li class="breadcrumb-item active" aria-current="page">New Six Product Template</li>
				</ol>
			</nav>
            <hr>


<div class="col-lg-12">
	<div class="row">
		<h2>Six Product Template</h2>
		<div class="col-lg-12">
			<?php require '../NEW/templates/new-six-product.php'; ?>
		</div>
	</div>
</div>