<?php 
	require 'includes/header.php';
	$url = "pages/" . $name . "/build/" . $id . ".php";
?>
<!-- /col-3 -->
<div class="col-sm-9">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item "><a href="index.php">Home</a></li>
			<li class="breadcrumb-item "><a href="pages.php?name=<?php echo $name; ?>&title=<?php echo $title; ?>"> <?php echo $title; ?> Templates</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $title . ' Template'; ?></li>
		</ol>
	</nav>
<hr>
<?php
	require $url;
    require 'includes/footer.php';
?>