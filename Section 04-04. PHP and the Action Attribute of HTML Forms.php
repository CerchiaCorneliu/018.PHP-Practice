<!DOCTYPE html>
<html>
	<head>
		<title>A BASIC HTML FORM</title>
	</head>
	<body>
		<FORM NAME ="form1" METHOD ="POST" ACTION = "Section 04-04. PHP and the Action Attribute of HTML Forms.php">
			<INPUT TYPE = "TEXT" name="username" VALUE ="username">
			<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">
		</FORM>
		<?php 
			if (isset($_POST['Submit1'])) {
			$username = $_POST['username'];

				if ($username == "letmein") {
				print ("Welcome back, friend!");

				} else {
				print ("You're not a member of this site");
				}
			}
		?>
	</body>
</html>