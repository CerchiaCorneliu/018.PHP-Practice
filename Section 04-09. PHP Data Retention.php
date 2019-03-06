<!DOCTYPE html>
<html>
<head>
	<title>A BASIC HTML FORM</title>
<?PHP
	/*
	$username = $_POST['username'];
	print $username;
	*/

	/*
	if (isset($_POST['Submit1'])) {
		$username = $_POST['username'];

		if ($username == "letmein") {
			print ("Welcome back, friend!");

		} else {
			print ("You're not a member of this site");
		}
	}
	*/

	/* 
	if (isset($_POST['Submit1'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		// print ($firstname . " " . $lastname);
	}
	*/
		
	if (isset($_POST['Submit1'])) {
		$username = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		if ($username == "letmein" && $lastname == "AAA") {
			print ("You're one of the 5 users");
		} else if ($username == "mein" && $lastname == "bbb") { 
			print ("You're one of the 5 users");
		} else if ($username == "eu" && $lastname == "ccc") { 
			print ("You're one of the 5 users");
		} else if ($username == "mein" && $lastname == "ddd") { 
			print ("You're one of the 5 users");
		} else if ($username == "mine" && $lastname == "eee") { 
			print ("You're one of the 5 users");
		} else {
			print ("You're not a member of this site");
		
		}
	}

?>
</head>
<body>
<Form name ="form1" Method ="POST" Action ="">
<!--<Input Type = "text" Value ="<?php // print $firstname ?>" Name ="firstname"> -->
<!--<Input Type = "text" Value ="<?php // print $lastname ?>" Name ="lastname">-->
<Input Type = "text" Value ="firstname" Name ="firstname">
<Input Type = "text" Value ="lastname" Name ="lastname">
<Input Type = "Submit" Name = "Submit1" Value = "Login">
</FORM>
</body>
</html>
