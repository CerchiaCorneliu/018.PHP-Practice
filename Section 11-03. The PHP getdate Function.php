<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// getdate( time_stamp );


		$today = getdate();
		print $today['mday'] . "<br>";
		print $today['wday'] . "<br>";
		print $today['yday'] . "<br>";


		$post_date = 60;
		$today = getdate();
		$day_difference = $today['yday'] - $post_date;
		print "Days since last post = " . $day_difference;
	?>
</body>
</html>



