<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*
		$user_name = "root";
		$password = "";
		$database = "addressbook";
		$server = "127.0.0.1";

		mysqli_connect($server, $user_name, $password);
		print "Connection to the Server opened";
		*/


		/*
		// Require and Define
		define('NAME_OF_CAT', 'Tiddles');
		if (NAME_OF_CAT == 'Bob') {
			Print "Wrong cat!"
		} // Parse error: syntax error, unexpected '}' in C:\xampp\htdocs\phpFiles\courseFiles\Section 13-01. Open and Close a connection to a database with PHP.php on line 22
		*/


		/*
		require 'configure.php';
		mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
		print "Server found" . "<BR>";
		*/


		// Specify the database you want to open
		$db = mysqli_connect('localhost', 'root', '', 'addressbook');
		if ($db) {
			print "Database found";
		} else {
			print "Database not found";
		}
		mysqli_close($db);
	?>
</body>
</html>



