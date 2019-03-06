<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/* 
		$TeacherInterrupts = true;
		$counter = 1;

		while($counter < 11) {
			print(" counter = " . $counter . "<br>");
			if ($TeacherInterrupts == true) {
				break;
			}
			$counter++;
		}
		*/

		$TeacherInterrupts = true;
		$counter = 1;

		while($counter < 11) {
			print(" counter = " . $counter . "<br>");
			if ($TeacherInterrupts == true && $counter >= 5) {
				break;
			}
			$counter++;
		}
	?>
</body>
</html>

