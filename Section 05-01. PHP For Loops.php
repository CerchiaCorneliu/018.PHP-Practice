<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$answer = 1 + 2 + 3 + 4;
		print $answer;
		*/

		
		$counter = 0;
		for($start = 1; $start < 11; $start++) {
			$counter = $counter + 1; //$counter++;
			print $counter . " ";
		}
		// 1 2 3 4 5 6 7 8 9 10

		/*
		$counter = 0;
		for($start = 1; start < 11; start++) {
			$counter ++;
			print $counter . "<br>";
		}
		*/
		// Parse error: syntax error, unexpected '++' (T_INC), expecting ')' in C:\xampp\htdocs\phpFiles\courseFiles\Section 05-01. PHP For Loops.php on line 27


		$counter = 11;
		for($start = 1; $start < 11; $start++) {
			$counter--;
			print $counter . " ";
		}
		// 10 9 8 7 6 5 4 3 2 1 
	?>
</body>
</html>

