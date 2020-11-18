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
$buttonHost = $_GET['host'];

echo "<h1 class='collapse-header'>" . $buttonHost . " Internal Banners</h1>";
?>
<!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Select Zone From Drop Down</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample">
                  <div class="card-body">
                   
                   <?php
						for($i = 101; $i <= 100 + count($internal); $i++){
							if ($buttonHost === $internal[$i][host]) {
								foreach($internal[$i][zone] as $value) {
									echo '<button onclick="myFunction(\'' . $buttonHost . '\',\'' . $value . '\')" type="button" class="btn-sm btn-primary">' . str_replace("%20"," ",$value) . '</button>';
								} break;
							}
						}
					?>

                  </div>
                </div>
              </div>
              <div id="banner-content" class="col-lg-12 mb-4 banner-content">
              	
              </div>

	
<script>
	let width = document.getElementById("banner-content").offsetWidth;
	function myFunction(buttonHost, clickValue) {
		let frameBeg = '<iframe src="';
		let frameEnd = '"></iframe>';
		let output = 'frame.php?host=' + buttonHost + '&zone=' + clickValue;
		console.log(output);
		document.getElementById("banner-content").innerHTML = frameBeg + output + frameEnd;
	}
</script>

<?php
include ("php/footer.php");
?>