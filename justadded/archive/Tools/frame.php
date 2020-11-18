<style>
	img {
		max-width: 300px;
	}
	div {
		display: inline-block;
		margin-right: 10px;
	}
</style>
<?php
$header = "php/header.php";
$testhost = 'www.amaindistributing.com';
$testzone = 'Marketing%20Zone%20-%20Primary%20Slider';
$buttonHost = $_GET['host'];
$buttonZone = $_GET['zone'];
$buttonLocation = $_GET[location];
$quote1 = "'";
$quote2 = "'";
$urlB = "https://x.amain.com/div.php?host=" . $buttonHost . "&zone=" . $buttonZone;
$completeURL =  str_replace(" ","%20",$urlB);
//echo $urlB . $buttonHost . $urlZ . $buttonZone;
include($completeURL);

?>