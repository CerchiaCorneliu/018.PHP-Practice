
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$file_handle = fopen("testFile.txt", "w");
		$file_contents = "Some test text";
		fwrite($file_handle, $file_contents);
		fclose($file_handle);
		print "file created and written to";
		*/


		/*
		$file_handle = fopen("testFile.txt", "a");
		$file_contents = "Some test text";
		fwrite($file_handle, $file_contents);
		fclose($file_handle);
		print "file created and written to";
		*/


		/*
		$file_handle = fopen("testFile.txt", "r");
		$file_contents = "Some test text";
		fwrite($file_handle, $file_contents);
		fclose($file_handle);
		print "file created and written to";
		*/


		// file_put_contents( )

		$file_handle = fopen("testFile.txt", "r");
		$file_contents = "Some test text";
		// third parameters: FILE_USE_INCLUDE_PATH, FILE_APPEND, LOCK_EX.
		file_put_contents($file_handle, $file_contents, FILE_APPEND | LOCK_EX);
		fclose($file_handle);
		print "file created and written to";
	?>
</body>
</html>



