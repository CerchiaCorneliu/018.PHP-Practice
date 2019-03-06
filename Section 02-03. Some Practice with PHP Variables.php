<!DOCTYPE html>
<html>
<head>
	<title>Variabiles - Some Practice</title>
</head>
<body>
	<?php
		// print("It Worked!");

		//--------------TESTING VARIABLES------------
		/* --------------TESTING VARIABLES------------
		Use this type of comment if you want to spill over to more than one line.
		Notice how the comment begin and end.
		*/


		$test_String = "It Worked!";
		$test_String = 'Hello World! 12345';



		// $test_String = 'Hello World! 1234"; 
		/* 
		Parse error: syntax error, unexpected ''Hello World! 1234"; ' (T_ENCAPSED_AND_WHITESPACE) in C:\xampp\htdocs\phpFiles\courseFiles\scripts\Section 02-03. Some Practice with PHP Variables.php on line 18 
		*/



		// print(test_String);
		/*
		Warning: Use of undefined constant test_String - assumed 'test_String' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\phpFiles\courseFiles\scripts\Section 02-03. Some Practice with PHP Variables.php on line 23
		test_String */
		


		// print($test_String)
		/*
		Hello World! 12345 
		*/



		// print(test_String)
		/* 
		Warning: Use of undefined constant test_String - assumed 'test_String' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\phpFiles\courseFiles\scripts\Section 02-03. Some Practice with PHP Variables.php on line 30
		test_String 
		*/
	?>
</body>
</html>
