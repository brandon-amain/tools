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
include ("php/revive.php");
include ("php/header.php");

              echo '<h6 class="collapse-header">' . $internal[105]['host'] . '</h6>';
              foreach ($internal[105]['zone'] as $key => $value) {
                echo '<a class="collapse-item" href="banners.php?internal101">' . $value . '"</a><br />';
              };



?>