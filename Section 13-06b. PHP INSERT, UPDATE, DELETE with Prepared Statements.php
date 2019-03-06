<html>
<head>
<title>A BASIC HTML FORM</title>

<?PHP
// Updating Records with Prepared Statements
$email = "";
$passW = "";
$uName = "";
if (isset($_POST['Submit1'])) {
	$uName = $_POST['user'];
	$passW = $_POST['pass'];
	$email = $_POST['email'];

	$db = mysqli_connect('localhost', 'root', '', 'membertest');

	if ($db) {
		$sql = $db->prepare("UPDATE members SET username=?, password=? WHERE email=?");
		$sql->bind_param('sss',  $uName, $passW, $email);
		$sql->execute();
		$sql->close();
		$db->close();
		print "Row updated";
	}
	else {
		print "Database NOT Found ";
	}
}

?>

</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="Section 13-06b. PHP INSERT, UPDATE, DELETE with Prepared Statements.php">

User <INPUT TYPE = 'TEXT' Name ='user' value="test2"> <BR>
Pass <INPUT TYPE = 'TEXT' Name ='pass'  value="test2"> <BR>
email address <INPUT TYPE = 'TEXT' Name ='email'  value="<?PHP print $email ; ?>">


<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Update">
</FORM>


</body>
</html>