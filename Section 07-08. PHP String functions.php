<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// The PHP char() function
		$email_address = "me" . chr(64) . "me.com";
		print $email_address;
		print "<p>";


		// The PHP ord() function
		$ascii_num = ord("@");
		print $ascii_num;
		print "<p>";


		// The PHP echo() function
		$display_data = "something to display";
		print $display_data . "<br>";
		echo $display_data;
		print "<p>";


		// The PHP similar_text() function
		$real_username ="Bill Gates";
		$user_attempt = "Bill Bates";
		$check = similar_text($real_username, $user_attempt, $percent);
		print($check) . "<BR>";
		print($percent . "% correct");
		print "<p>";


		// The PHP str_repeat() function
		$extra_dollars = str_repeat( "$", 9 );
		print $extra_dollars;
		print "<p>";


		// The PHP str_replace() function
		$search_text = "The explore function";
		$look_for = "explore";
		$change_to = "explode";
		print $search_text . "<BR>";
		$changed_text = str_replace($look_for, $change_to, $search_text);
		print $changed_text;
		print "<p>";


		// The PHP str_word_count() function
		$num_of_words = str_word_count("The word count function");
		print $num_of_words;
		print "<p>";


		// The PHP strlen() function
		$string_length = strlen( "This is some text" );
		print $string_length;
		print "<p>";


		// The PHP substr() function
		$email = "test@test.com";
		$email_end = substr( $email, strlen($email) - 4 );
		if ($email_end == ".com" ) {
		print "ends in .com";
		} else {
		print "doesn't end in .com";
		}
	?>
</body>
</html>

