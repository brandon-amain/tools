<script>
	var left = (screen.width / 2);
  	var top = (screen.height / 2);
	function target_popup(form) {
    window.open('', 'formpopup', 'left=' + left + ', top=' + top + 'width=650, resizeable,scrollbars');
    form.target = 'formpopup';
}
</script>
<?php 

	require 'includes/header.php';
	$url = "pages/" . $name . "/result/" . $id . ".php";
?>
<!-- /col-3 -->
<div class="col-sm-9">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item "><a href="index.php">Home</a></li>
			<li class="breadcrumb-item "><a href="pages.php?name=<?php echo $name; ?>&title=New Product">New Product Templates</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $title . ' Template'; ?></li>
		</ol>
	</nav>
	<hr>
	<div class="col-sm-9">
		<form action="includes/preview.php" method="post" onsubmit="target_popup(this)">
			<?php require $url; ?>
			<button style="margin: 20px;" type="submit" class="btn btn-lg btn-warning">Preview Email</button>
		</form>
	</div>
 </div>
<?php
    require 'includes/footer.php';
?>