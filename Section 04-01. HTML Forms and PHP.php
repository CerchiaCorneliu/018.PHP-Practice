<!DOCTYPE html>
<html>
	<head>
		<title>A BASIC HTML FORM</title>
	</head>
	<body>
		<FORM NAME ="form1" METHOD ="POST" ACTION = "Section 04-01. HTML Forms and PHP.php">
			<INPUT TYPE = "TEXT" name="username" VALUE ="username">
			<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">
		</FORM>
		<?php
			$username = $_POST['username'];
			print $username;
		?>
	</body>
</html>