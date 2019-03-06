<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/* Method 1
		$seasons = array( "Autumn", "Winter", "Spring", "Summer" );

		$seasons = array( 1 => "Autumn", 2 => "Winter", 3 => "Spring", 4 => "Summer" );

		$Array_Name = array(10, 20, 30, 40);
		$Array_Name = array(1 => 10, 2 => 20, 3 => 30, 4 => 40);

		$Array_Name = array(1 => 10, 2 => "Spring", 3 => 30, 4 => "Summer");	
		*/


		/* Method 2
		$seasons = array();
		$seasons[ ]="Autumn";
		$seasons[ ]="Winter";
		$seasons[ ]="Spring";
		$seasons[ ]="Summer";

		$seasons = array();
		$seasons[1]="Autumn";
		$seasons[2]="Winter";
		$seasons[3]="Spring";
		$seasons[4]="Summer";
		*/


		$times = 2;
		$answer = array();

		for ($start = 1; $start < 11; $start++) {

		$answer[$start] = $start * $times;
			print $answer[$start] . "<br>";
		}


		$seasons = array( "Autumn", "Winter", "Spring", "Summer" );
		print_r($seasons); // Array ( [0] => Autumn [1] => Winter [2] => Spring [3] => Summer )
	?>
</body>
</html>

