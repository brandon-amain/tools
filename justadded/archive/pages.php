<?php 
	$url = $_GET['id'];
	$name = $_GET['name'];
	$title = $_GET['title'];

    require 'includes/header.php';
?>
<!-- /col-3 -->
<!-- Bread Crumb -->
<div class="col-sm-9">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item " aria-current="page"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?> Templates</li>
		</ol>
	</nav>
<hr>
<?php
    require 'pages/' . $name . '.php';	
	require 'includes/footer.php';
?>