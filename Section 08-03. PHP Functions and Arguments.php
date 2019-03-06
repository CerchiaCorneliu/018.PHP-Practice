<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// Arguments
		/*
		$error_text = "Error message";
		display_error_message($error_text);
		function display_error_message($error_text) {
			print $error_text;
		}  // Error message
		*/


		/*
		$error_text = "Error message";
		display_error_message();
		// "Warning: Missing argument 1 for display_error_message( )"
		*/

		function error_check($error_text, $error_flag) {
			print($error_text . " " . $error_flag);
		} 
		$error_text = "Error message";
		$error_flag = 1;
		error_check($error_text, $error_flag);

	?>
</body>
</html>

