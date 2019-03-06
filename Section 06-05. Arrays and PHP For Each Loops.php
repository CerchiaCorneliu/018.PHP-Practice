<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$full_name = array();
		$full_name["David"] = "Gilmour";
		$full_name["Nick"] = "Mason";
		$full_name["Roger"] = "Waters";
		$full_name["Richard"] = "Wright";

		foreach ($full_name as $key_name => $key_value) {
			print "Key = " . $key_name . " Value = " . $key_value . "<BR>";
		}
	?>
</body>
</html>
