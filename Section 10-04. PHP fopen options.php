<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		print ("<img src = 'fopen_options.png'><br>");

		// $file_handle = fopen("dictionary.txt", "r+"); // Resource id #3
		// $file_handle = fopen("dictionary.txt", "a+"); // Resource id #3
		// $file_handle = fopen("dictionary.txt", "rb"); // Resource id #3
		// print $file_handle . "<br>";

		// file_exists
		if (file_exists("dictionary2.txt")) {
			print "file exists";
		} else {
			print "file doesn't exist";
		}
	?>
</body>
</html>



