<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$numbers = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);
		$random_key = array_rand($numbers, 1);
		print $random_key;
	?>
</body>
</html>

