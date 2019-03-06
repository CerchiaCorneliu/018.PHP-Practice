<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$agent = $_SERVER["HTTP_USER_AGENT"];
		print $agent;
		*/


		/*
		$full_name = "bill gates";
		$letter_position = strpos( $full_name, "b" ); 
		print $letter_position;
		*/


		/*
		$full_name = "bill gates";
		$letter_position = strpos( $full_name, "B" ); 
		if ($letter_position === false) {
		print "Character not found " ;
		}else {
		print "Character found";
		}
		*/


		$agent = $_SERVER['HTTP_USER_AGENT'];
		if (strpos(strtoupper($agent), 'MSIE') ) {
		print "Internet Explorer";
		} else if (strpos(strtoupper($agent), 'FIREFOX')) {
		print "Firefox";
		} else {
		print $agent;
		}
	?>
</body>
</html>

