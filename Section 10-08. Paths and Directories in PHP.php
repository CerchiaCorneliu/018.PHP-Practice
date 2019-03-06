<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// Get the Absolute Path of a File
		$absolute_path = realpath("fileDir.php");
		print "Absolute path is: " . $absolute_path. "<br>";


		// Get the Directory, but not the file name
		$dir = dirname("folder/myphp/fileDir.php");
		print "directory is: " . $dir . "<BR>";


		// Get the Filename only
		$bas = basename("folder/myphp/fileDir.php");
		print "File Name is: " . $bas . "<BR>";
	?>
</body>
</html>



