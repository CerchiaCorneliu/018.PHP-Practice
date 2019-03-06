<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$error_text = "Error Detetceted";
		display_error_message();
		function display_error_message( ) {
			print $error_text;
		}
		*/
		// Notice: Undefined variable: error_text in C:\xampp\htdocs\phpFiles\courseFiles\Section 08-02. PHP Variable Scope.php on line 10


		/*
		display_error_message();
		print $error_text;
		function display_error_message() {
			$error_text = "Error message";
		}
		*/
		// Notice: Undefined variable: error_text in C:\xampp\htdocs\phpFiles\courseFiles\Section 08-02. PHP Variable Scope.php on line 18


		display_error_message();
		function display_error_message() {
			$error_text = "Error message";
			print $error_text;
		}
	?>
</body>
</html>

