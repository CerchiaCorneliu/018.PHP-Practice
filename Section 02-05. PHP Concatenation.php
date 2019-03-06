<!DOCTYPE html>
<html>
<head>
	<title>More on Variables</title>
</head>
<body>
	<?php
		$first_number = 10;	
		$direct_text = 'My variable contains the value of ';
		print($direct_text . $first_number . "<br>");


		// print($direct_text $first_number);
		/* 
		Parse error: syntax error, unexpected '$first_number' (T_VARIABLE) in C:\xampp\htdocs\phpFiles\courseFiles\scripts\Section 02-05. PHP Concatenation.php on line 13
		*/


		$first_number = 10;
		print ('My variable contains the value of ' . $first_number . "<br>");

		// print ('My variable contains the value of ' $first_number);
		/*
		Parse error: syntax error, unexpected '$first_number' (T_VARIABLE) in C:\xampp\htdocs\phpFiles\courseFiles\scripts\Section 02-05. PHP Concatenation.php on line 23
		*/

		$first_number = 10;
		print ("My variable contains the value of $first_number <br>"); 
		// My variable contains the value of 10 
		print ('My variable contains the value of $first_number <br>'); 
		// My variable contains the value of $first_number 
		echo ('My variable contains the value of $first_number <br>');
		// My variable contains the value of $first_number 
	?>
</body>
</html>
