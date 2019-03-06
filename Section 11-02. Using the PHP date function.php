<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// $today = date('d-m-y');
		// $today = date('d:m:y');
		// $today = date('d m y');
		$today = date('d~m~y');
		print $today . "<br>";

		// Example 1 (prints out something like Monday 7th January 2017)
		$today = date('l jS F Y');
		print $today . "<br>";

		// Example 2 (prints out something like "It's week 4 of 2017")
		$today = date('W');
		$year = date('Y');
		print "It's week " . $today . " of " . $year . "<br>";

		// Example 3 (prints out something like "11:25:44 am")
		$time = date('h:i:s A');
		print $time . "<br>";

		// Example 4 (prints out something like "23:28 GMT Standard Time")
		$time = date('G:i T');
		print $time;
	?>
</body>
</html>



