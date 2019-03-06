<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<FORM NAME ="form1" METHOD ="POST" ACTION ="Section 13-05. PHP Prepared Statements.php">
		email address 
		<INPUT TYPE = 'TEXT' Name ='email' value="">
		<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">
	</FORM>
	<?php
		// $SQL = "INSERT INTO tbl_address_book (First_Name, Surname, Address) VALUES ('Paul', 'McCartney', 'Penny Lane')";
		// $SQL = "SELECT * FROM members WHERE email = '$email' ";	

		$email = "";
		if (isset($_POST['Submit1'])) {
			$email = $_POST['email'];
			$db = mysqli_connect('localhost', 'root', '', 'membertest');

			if ($db) {
				$sql = $db->prepare('SELECT * FROM members WHERE email = ?');
				$sql->bind_param('s', $email);
				$sql->execute();
				$result = $sql->get_result();

				if ($result->num_rows > 0) {
					while ( $db_field = $result->fetch_assoc() ) {
						print $db_field['ID'] . "<BR>";
						print $db_field['username'] . "<BR>";
						print $db_field['password'] . "<BR>";
						print $db_field['email'] . "<BR>";
					}
				} else {
					print "No records found";
				}
				$sql->close();
				$db->close();
			} else {
				print "Database NOT Found ";
			}

		}
	?>
</body>
</html>



