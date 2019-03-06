<html>
<head>
	<title></title>
</head>
<body>
	<?php 

		/*
		$counter = 1;

		while ($counter < 11) {

		print (" counter = " . $counter . "<BR>");
		$counter++;

		}
		*/


		$start = 1;
		$times = 2;
		$answer = 0;

		while ($start < 11) {
			$answer = $start * $times;
			print ($start . " times " . $times. " = " . $answer . "<br>");
			$start++;
		}
	?>
</body>
</html>

