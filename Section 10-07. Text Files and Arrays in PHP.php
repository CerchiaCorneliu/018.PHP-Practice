<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$file_handle = fopen("dictionary.txt", "rb");
		while (!feof($file_handle) ) {
			$line_of_text = fgets($file_handle);
			$parts = explode('=', $line_of_text);
			print $parts[0] . $parts[1]. "<BR>";
		}
		fclose($file_handle);
	?>
</body>
</html>



