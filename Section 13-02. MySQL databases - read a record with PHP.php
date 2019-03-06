<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$db = mysqli_connect('localhost', 'root', '', 'addressbook');
		if ($db) {
			$sql = "SELECT * FROM tbl_address_book";
			$result = mysqli_query($db, $sql);
			while ($db_field = mysqli_fetch_assoc($result)) {
				print $db_field['id'] . "<BR>";
				print $db_field['First_name'] . "<BR>";
				print $db_field['Surname'] . "<BR>";
				print $db_field['Address'] . "<BR>";
			}
		} else {
			print "Database NOT found";
		}
		mysqli_close($db);
		// 1
		// Test
		// Name
		// 12 Test Street
	?>
</body>
</html>



