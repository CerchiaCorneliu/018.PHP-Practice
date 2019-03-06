<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<Form Method = "Post" action ="Section 09-03. PHP strip_tags.php">
		<input type = "text" name = "first_name" value ="test name">
		<input type="submit" name="Submit" value="Submit">
	</Form>
	<?php
		// strip_tags( $string, html_tags_to_ignore )
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$first_name = $_POST['first_name'];
			$first_name = strip_tags($first_name);
			echo $first_name;
		}
	?>
</body>
</html>



