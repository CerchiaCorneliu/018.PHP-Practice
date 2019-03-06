<!DOCTYPE html>
<html>
<head>
	<title>Include files</title>
</head>
<body>
	<H3>Normal text here </H3>
	Normal text written in a HTML Editor
	<H3>Include File here</H3>
	<?php 
	// include "links.php"; 

	include "myOtherScript.php";
	doPrint();

	print "<BR>";
	print "This was printed from the includeScript.php";
	?>

</body>
</html>



