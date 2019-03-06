<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$db = mysqli_connect('localhost', 'root', '', 'addressbook');
		if ($db) {
			$sql = "INSERT INTO tbl_address_book (First_Name, Surname, Address) VALUES ('John', 'Cena', 'Main Lane')";
			$result = mysqli_query($db, $sql);
			mysqli_close($db);
			print "Records added to the database";	
		} else {
			print "Database NOT found";
		} // Records added to the database
		
		
	?>
</body>
</html>



