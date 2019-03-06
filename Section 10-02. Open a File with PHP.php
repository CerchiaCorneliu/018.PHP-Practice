<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// readfile
		/*
		$file_contents = readfile("dictionary.txt");
		print $file_contents;
		*/

		/*
		$file_to_read = "dictionary.txt";
		print readfile($file_to_read);
		*/

		/*
		$file_to_read = "scripts\dictionary.txt";
		print readfile($file_to_read);
		*/


		// file_get_contents (file_to_read)
		$file_to_read = "dictionary.txt";
		print file_get_contents( $file_to_read );
	?>
</body>
</html>



