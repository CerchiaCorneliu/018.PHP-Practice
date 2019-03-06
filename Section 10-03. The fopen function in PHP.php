<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$file_contents = fopen( "dictionary.txt", "r" );
		print $file_contents;
		fclose($file_contents); // Resource id #3
		*/


		/*
		$version = phpversion();
		print $version; //7.2.4
		*/


		$file_handle = fopen("dictionary.txt", "r");
		while (!feof($file_handle)) {
			$line_of_text = fgets($file_handle);
			// $line_of_text = fgets($file_handle, 1024);
			print $line_of_text . "<br>";
		}
		fclose($file_handle);


	?>
</body>
</html>



