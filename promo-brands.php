<?php
include ("php/revive.php");
include ("php/header.php");
$buttonHost = $_GET['host'];

echo "<h1 class='collapse-header'>" . $buttonHost . " External Banners</h1>";
?>
<div id="banner-content" class="col-lg-12 mb-4 banner-content">
              	
            
              <iframe src="https://docs.google.com/spreadsheets/d/1vxPPB9ow2ZBceOa2a6854q_EK-5iaJMFJ9v8bSM3IFc/edit?usp=sharing/pubhtml?widget=true&amp;headers=false"></iframe>

	</div>
<script>
	let width = document.getElementById("banner-content").offsetWidth;
	function myFunction(buttonHost, clickValue) {
		let frameBeg = '<iframe frameborder="0" src="';
		let frameEnd = '"></iframe>';
		let output = 'frame.php?host=' + buttonHost + '&zone=' + clickValue;
		console.log(output);
		document.getElementById("banner-content").innerHTML = frameBeg + output + frameEnd;
	}
</script>

<?php
include ("php/footer.php");
?>