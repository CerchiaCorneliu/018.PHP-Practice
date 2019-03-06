<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<Form Method = "Post" action ="Section 09-02. HtmlSpecialChar.php">
		<input type = "text" name = "first_name" value ="test name">
		<input type = "submit" name="Submit" value="Submit">
	</Form>
	<?php
		/* 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$first_name = $_POST['first_name'];
			$first_name = htmlspecialchars($first_name);
			echo $first_name;
		} 
		*/

		// htmlentities( ) used for non English language characters
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$first_name = $_POST['first_name'];
			$first_name = htmlentities($first_name);
			echo $first_name;
		}
	?>
</body>
</html>



