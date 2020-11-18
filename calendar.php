<?php
include ("php/revive.php");
include ("php/header.php");
$domain = $_GET['domain'];
$test = "https://calendar.google.com/calendar/embed?src=l62bh8ud5tuc5scjiqe1e2ts26n8je3s%40import.calendar.google.com&ctz=America%2FLos_Angeles";
$calendars = array(
	"https://calendar.google.com/calendar/embed?src=l62bh8ud5tuc5scjiqe1e2ts26n8je3s%40import.calendar.google.com&ctz=America%2FLos_Angeles",
	"https://calendar.google.com/calendar/embed?src=tov2j6n5d79bejp9u5oqod6k2ges8hb8%40import.calendar.google.com&ctz=America%2FLos_Angeles",
	"https://calendar.google.com/calendar/embed?src=3ter4hcqgui9dk3ri934hfeqitfqd8rh%40import.calendar.google.com&ctz=America%2FLos_Angeles",
	"https://calendar.google.com/calendar/embed?src=2ghl302m6d6blpms0gje5oc8hv3nnhe1%40import.calendar.google.com&ctz=America%2FLos_Angeles",
	"https://calendar.google.com/calendar/embed?src=qtjeei8pqa6dh3u95bqbe97eas4r5ibo%40import.calendar.google.com&ctz=America%2FLos_Angeles",
	"https://calendar.google.com/calendar/embed?src=ci1cbluc4q9k86h3klt07a2odofbraua%40import.calendar.google.com&ctz=America%2FLos_Angeles"
);


$distributed = 'https://docs.google.com/spreadsheets/d/1vxPPB9ow2ZBceOa2a6854q_EK-5iaJMFJ9v8bSM3IFc/edit?usp=sharing;pubhtml&widget=true&amp;headers=false"';
$marketingThings = 'https://docs.google.com/document/d/1_H4La796n1ZewSCtGfsVq_Hldq7wBwe6j6GVGiAqRX0/edit?usp=sharing;pub&embedded=true';

if ($domain === 'distributing') {
	$iframe = $calendars[0];
} else if ($domain === 'hobbies') {
	$iframe = $calendars[1];
} else if ($domain === 'flitetest') {
	$iframe = $calendars[2];
} else if ($domain === 'cycling') {
	$iframe = $calendars[3];
} else if ($domain === 'performance') {
	$iframe = $calendars[4];
} else if ($domain === 'nashbar') {
	$iframe = $calendars[5];
} else if ($domain === 'distributed') {
	$iframe = $distributed;
} else if ($domain === 'marketingThings') {
	$iframe = $marketingThings;
}

?>
<div id="banner-content" class="col-lg-12 mb-4 banner-content">
              	
            
             <?php echo '<iframe src="' . $iframe . '" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>'; ?>

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


0/8d2cff2163626746d02e7223bff34a9d