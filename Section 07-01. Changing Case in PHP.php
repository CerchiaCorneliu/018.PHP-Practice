<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// Changing the Case of a Character
		$full_name = 'bill gates';
		if (isset($_POST['Submit1'])) {
			$full_name = $_POST['username'];
			$full_name = ucwords($full_name);
			// $full_name = ucfirst($full_name);
		}

		/*
		$change_to_lowercase = "CHANGE THIS";
		$change_to_lowercase = strtolower($change_to_lowercase);
		print $change_to_lowercase;

		$change_to_uppercase = "change this";
		$change_to_uppercase = strtoupper($change_to_lowercase);
		print $change_to_uppercase;
		*/
	?>
	<FORM NAME ="form1" METHOD ="POST" ACTION ="Section 07-01. Changing Case in PHP.php">
		<INPUT TYPE = 'TEXT' Name ='username'  value=<?PHP print $full_name;?>>
		<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
	</FORM>
</body>
</html>
