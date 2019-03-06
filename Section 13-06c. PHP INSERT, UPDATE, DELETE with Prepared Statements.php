<html>
<head>
<title>A BASIC HTML FORM</title>

<?PHP
// Deleting Records with Prepared Statements
$email = "";
$passW = "";
$uName = "";
if (isset($_POST['Submit1'])) {
	$uName = $_POST['user'];
	$passW = $_POST['pass'];
	$email = $_POST['email'];

	$db = mysqli_connect('localhost', 'root', '', 'membertest');

	if ($db) {
		$sql = $db->prepare("DELETE FROM members WHERE email=?");
		$sql->bind_param('s', $email);
		$sql->execute();
		$sql->close();
		$db->close();
		print "ROW DELETED";
	}
	else {
		print "Database NOT Found ";
	}
}

?>

</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="Section 13-06c. PHP INSERT, UPDATE, DELETE with Prepared Statements.php">

User <INPUT TYPE = 'TEXT' Name ='user' value="test2"> <BR>
Pass <INPUT TYPE = 'TEXT' Name ='pass'  value="test2"> <BR>
email address <INPUT TYPE = 'TEXT' Name ='email'  value="<?PHP print $email ; ?>">


<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Delete">
</FORM>


</body>
</html>