<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$space = " username ";
		$letCount = strlen($space);
		print $letCount;

		print "<br>";

		$space = trim(" username ");
		$letCount = strlen($space);
		print $letCount;

		print "<br>";

		$space = ltrim(" username ");
		$letCount = strlen($space);
		print $letCount;

		print "<br>";

		$space = rtrim(" username ");
		$letCount = strlen($space);
		print $letCount;

		print "<br>";
	?>
</body>
</html>
