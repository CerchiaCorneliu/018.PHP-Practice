<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$start = 1;
		$times = 2;
		$answer = 0;

		do {
			$answer = $start * $times;
			print ($start . " times " . $times. " = " . $answer . "<br>");
			$start++;
		} while ($start < 11);
		
	?>
</body>
</html>

