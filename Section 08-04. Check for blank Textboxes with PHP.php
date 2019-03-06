<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// $user_text = trim("Bill Gates");
		$user_text = trim("");
		display_error_message($user_text);
		function display_error_message($user_text) {
			if($user_text == ""){
				print "Blank text box detected";
			} else {
				print "Text OK";
			}
		}
	?>
</body>
</html>

