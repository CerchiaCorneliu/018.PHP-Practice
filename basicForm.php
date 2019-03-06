<html>
<head>
<title>A BASIC HTML FORM</title>
<?PHP
	/*
	$username = $_POST['username'];
	print $username;
	*/
	if (isset($_POST['Submit1'])) {
	$username = $_POST['username'];

		if ($username == "letmein") {
		print ("Welcome back, friend!");

		} else {
		print ("You're not a member of this site");
		}
	}

?>
</head>
<body>
<Form name ="form1" Method ="POST" Action ="basicForm.php">
<Input Type = "text" Value ="username" Name ="username">
<Input Type = "Submit" Name = "Submit1" Value = "Login">
</FORM>
</body>
</html>
