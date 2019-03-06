<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// Script One - Set up an array and print out the values 
		$seasons = array("Autumn", "Winter", "Spring", "Summer");
		print $seasons[0] . " ";
		print $seasons[1] . " ";
		print $seasons[2] . " ";
		print $seasons[3] . "<br>";


		// Script Two - Set up an array with your own Keys
		$seasons = array(1 => "Autumn", 2 => "Winter", 3 => "Spring", 4 => "Summer");
		print $seasons[1] . " ";
		print $seasons[2] . " ";
		print $seasons[3] . " ";
		print $seasons[4] . "<br>";


		// Script Three - Set up an array with mixed values
		$seasons = array(1 => 10, 2 => "Spring", 3 => 30, 4 => "Summer");
		print $seasons[1] . " ";
		print $seasons[2] . " ";
		print $seasons[3] . " ";
		print $seasons[4] . "<br>";


		// Script Four - Assign values to an array: Method Two example
		$seasons = array();
		$seasons[ ]="Autumn";
		$seasons[ ]="Winter";
		$seasons[ ]="Spring";
		$seasons[ ]="Summer";
		print $seasons[0] . " ";
		print $seasons[1] . " ";
		print $seasons[2] . " ";
		print $seasons[3] . "<br>";


		// Script Five - Looping round values in an array
		$times = 2;
		$answer = array();
		for ($start = 1; $start < 11; $start++) {
		$answer[$start] = $start * $times;
		}
		print $answer[1] . " ";
		print $answer[4] . " ";
		print $answer[8] . " ";
		print $answer[10] . "<br>";


		// Script Six - Looping round values in an array: example 2
		$seasons = array("Autumn", "Winter", "Spring", "Summer");
		for ($key_Number = 0; $key_Number < 4; $key_Number++) {
		print $seasons[$key_Number] . " ";
		}
		print "<br>";


		// Script Seven - Using text as Keys
		$full_name = array();
		$full_name["David"] = "Gilmour";
		$full_name["Nick"] = "Mason";
		$full_name["Roger"] = "Waters";
		$full_name["Richard"] = "Wright";
		print $full_name["Nick"] . "<br>";
		print $full_name["David"] . "<br>";


		// Script Eight - Looping round an Associative array using For Each
		$full_name = array();
		$full_name["David"] = "Gilmour";
		$full_name["Nick"] = "Mason";
		$full_name["Roger"] = "Waters";
		$full_name["Richard"] = "Wright";
		foreach ($full_name as $first_name => $surname) {
		print "Key = " . $first_name . " Value = " . $surname . "<BR>";
		}


		// Script Nine - Sorting Arrays (Associative)
		$full_name = array();
		$full_name["Roger"] = "Waters";
		$full_name["Richard"] = "Wright"; 
		$full_name["Nick"] = "Mason";
		$full_name["David"] = "Gilmour";
		foreach ($full_name as $first_name => $surname) {
		print "Key = " . $first_name . " Value = " . $surname . "<BR>";
		}
		print "<P>";
		ksort($full_name);
		foreach ($full_name as $first_name => $surname) {
		print "Key = " . $first_name . " Value = " . $surname . "<BR>";
		}


		// Script Ten - Sorting Arrays (Scalar)
		$numbers = array();
		$numbers[ ]="2";
		$numbers[ ]="8";
		$numbers[ ]="10";
		$numbers[ ]="6";
		sort($numbers);

		//rsort($numbers) . "<BR>";
		//asort($numbers) . "<BR>";
		//arsort ($numbers) . "<BR>";
		//ksort($numbers) . "<BR>";
		//krsort($numbers) . "<BR>";
		print $numbers[0] . " ";
		print $numbers[1] . " ";
		print $numbers[2] . " ";
		print $numbers[3];

	?>
</body>
</html>

