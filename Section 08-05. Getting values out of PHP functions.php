<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		// print ("Get on with it!");
		// $string_length = strlen($string_length);
		


		$total_spent = 120;
		$order_total = calculate_total($total_spent);
		print $order_total;

		function calculate_total($total_spent) {
			$discount = 0.1;
			if ($total_spent > 100) {
			$discount_total = $total_spent - ($total_spent * $discount);
			$total_charged = $discount_total;
			} else {
			$total_charged = $total_spent;
			}
			return $total_charged;
		}
	?>
</body>
</html>

