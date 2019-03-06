<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$Variable_Value = 10;
		example( );

		function example() {
			print $Variable_Value;
		}
		// Notice: Undefined variable: Variable_Value in C:\xampp\htdocs\phpFiles\courseFiles\Section 08-06. By Ref, By Val.php on line 12
		*/


		/*
		$Variable_Value = 10;
		example($Variable_Value);

		function example($Variable_Value) {
			print $Variable_Value;
		} // 10
		*/


		/*
		$Variable_Value = 10;
		print "Before the function call = " . $Variable_Value . "<BR>";
		example($Variable_Value);
		print "After the function call = " . $Variable_Value;

		function example($Variable_Value) {
			$Variable_Value = $Variable_Value + 10;
			print "Inside of the function = " . $Variable_Value . "<BR>";
		}
		// Before the function call = 10
		// Inside of the function = 20
		// After the function call = 10
		*/


		$Variable_Value = 10;
		print "Before the function call = " . $Variable_Value . "<BR>";
		example($Variable_Value);
		print "After the function call = " . $Variable_Value;

		function example(&$Variable_Value) {
			$Variable_Value = $Variable_Value + 10;
			print "Inside of the function = " . $Variable_Value . "<BR>";
		}

		// Before the function call = 10
		// Inside of the function = 20
		// After the function call = 20
	?>
</body>
</html>

