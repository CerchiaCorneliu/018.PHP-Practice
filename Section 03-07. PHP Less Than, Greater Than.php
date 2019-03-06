<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			/*
			$total_spent = 110;
			$discount_total = 100;

			if($total_spent > $discount_total) {
				print("10 percent discount applies to this order!");
			}
			*/

			$total_spent = 90;
			$discount_total = 100;
			if ($total_spent > $discount_total) {
			print("10 percent discount applies to this order!");
			}
			else if($total_spent < $discount_total) {
			print("Sorry – No discount!");
			}

		?>
	</body>
</html>