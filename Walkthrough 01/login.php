<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$db_found = mysqli_connect('localhost', 'root', '', 'login');

	if ($db_found) {
		$SQL = $db_found->prepare('SELECT * FROM login WHERE L1 = ?');
		$SQL->bind_param('s', $uname);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows == 1) {
			$db_field = $result->fetch_assoc();
			if (password_verify($pword, $db_field['L2'])) {
				session_start();
				$_SESSION['login'] = "1";
				header ("Location: page1.php");
			} else {
				$errorMessage = "Login FAILED";
				session_start();
				$_SESSION['login'] = '';
			}
		} else {
			$errorMessage = "username FAILED";
		}
	}
}
?>

<html>
<head>
<title>Basic Login Script</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="login.php">
	Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" maxlength="20">
	Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" maxlength="16">
	<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
</FORM>
<P>
<?PHP print $errorMessage;?>
</body>
</html>