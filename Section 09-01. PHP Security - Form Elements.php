<!DOCTYPE html>
<html>
<head>
	<title>Test Attack</title>
</head>
<body>
	<Form Method = "Post" action ="Section 09-01. PHP Security - Form Elements.php">
		<input type = "text" name = "first_name" value ="test name">
		<input type="submit" name="Submit" value="Submit">
	</Form>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$first_name = $_POST['first_name'];
			echo $first_name;
		}
	?>
</body>
</html>



