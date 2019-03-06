<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$text_line = "Poll number 1, 1500, 250, 150, 100, 1000";
		$text_line = explode(",", $text_line);
		print $text_line[0];
		print $text_line[1];
		print $text_line[2];
		print $text_line[3];
		print $text_line[4];
		print $text_line[5];
		// print $text_line[6];
		// Notice: Undefined offset: 6 in C:\xampp\htdocs\phpFiles\courseFiles\Section 07-05. Splitting a line of text in PHP.php on line 15
		*/


		/*
		$text_line = "Poll number 1, 1500, 250, 150, 100, 1000";
		$text_line = explode(",", $text_line);
		print_r($text_line);
		// Array ( [0] => Poll number 1 [1] => 1500 [2] => 250 [3] => 150 [4] => 100 [5] => 1000 )
		*/


		$text_line = "Poll number 1, 1500, 250, 150, 100, 1000";
		$text_line = explode(",",$text_line);
		for ($start = 0; $start < count($text_line); $start++) {
			print $text_line[$start] . "<BR>";
		}
	?>
</body>
</html>

