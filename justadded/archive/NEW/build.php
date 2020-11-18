<?php 
	$url = $_GET['id'];
	$title = $_GET['title'];

    require 'includes/header.php';
    if ($url == 1) {
		require 'pages/newproduct.php';	
	} else if ($url == 2) {
		require 'pages/review.php';
	} else if ($url == 3) {
		require 'pages/accessory.php';
	} else if ($url == 4) {
		require 'pages/youtube.php';
	} else if ($url == 5) {
		require 'pages/newbrand.php';
	} else if ($url == 6) {
		require 'pages/miss.php';
	} else if ($url == 7) {
		require 'pages/wishlist.php';
	} else if ($url == 8) {
		require 'pages/cart.php';
	} else {
		echo "<p>Page Not Found</p>";
	}
    require 'includes/footer.php';
?>