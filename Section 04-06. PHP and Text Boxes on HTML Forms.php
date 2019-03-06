<!DOCTYPE html>
<html>
	<head>
		<title>A BASIC HTML FORM</title>
	</head>
	<body>
		<FORM NAME ="form1" METHOD ="POST" ACTION = "Section 04-06. PHP and Text Boxes on HTML Forms.php">
			<INPUT TYPE = "TEXT" VALUE ="username" NAME="username">
			<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">
		</FORM>
		<?PHP
			$username = $_POST['username'];
			// print ($username);

			if ($username == "letmein") {
				print ("Welcome back, friend!");
			}
			else {
				print ("You're not a member of this site");
			}
		?>
	</body>
</html>