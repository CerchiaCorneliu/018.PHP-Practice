<?PHP
if (isset($_GET['Sub1'])) {
	// require '../../configure.php';
	$question = $_GET['question'];
	$answerA = $_GET['AnswerA'];
	$answerB = $_GET['AnswerB'];
	$answerC = $_GET['AnswerC'];
	$db_found = mysqli_connect('localhost', 'root', '', 'survey');

	if ($db_found) {
		$SQL = "INSERT INTO tblsurvey (Question, OptionA, OptionB, OptionC) VALUES (?,?,?,?)";
		$stmt = $db_found->prepare($SQL);
		if ($stmt) {
			$stmt->bind_param('ssss', $question, $answerA, $answerB, $answerC);
			$stmt->execute();
			print "The question has been added to the database";
		} else {
			print "Database - error";
		}
	} else {
		print "Database NOT Found ";
	}
}

?>
<html>
	<head>
		<title>Survey Admin Page</title>
	</head>
	<body>
		<FORM NAME ="form1" METHOD ="GET" ACTION ="setQuestion.php">
			Enter a question: <INPUT TYPE = 'TEXT' Name ='question'  value="What is the Question?" maxlength="40">
			<p>
			Answer A: <INPUT TYPE = 'TEXT' Name ='AnswerA'  value="Option A" maxlength="20">
			Answer B: <INPUT TYPE = 'TEXT' Name ='AnswerB'  value="Option B" maxlength="20">
			Answer C: <INPUT TYPE = 'TEXT' Name ='AnswerC'  value="Option C" maxlength="20">
			<P>
			<INPUT TYPE = "Submit" Name = "Sub1" VALUE = "Set this Question">
			</P>
		</FORM>
	</body>
</html>









