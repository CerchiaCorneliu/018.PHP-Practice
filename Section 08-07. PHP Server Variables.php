<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$referrer = $_SERVER['HTTP_REFERER'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		print "Referrer=" . $referrer . "<br>";
		print "Browser=" . $browser . "<br>";
		print "IP Address=" . $ipAddress;
		*/

		foreach ($_SERVER as $key_name => $key_value) {
		 	print $key_name . "=" . $key_value . "<br>";
		} 
	?>
</body>
</html>

