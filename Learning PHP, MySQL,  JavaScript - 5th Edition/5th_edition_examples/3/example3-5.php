<?php
  $oxo = array(array('x', ' ', 'o'),
               array('o', 'o', 'x'),
               array('x', 'o', ' '));

  echo $oxo[1][2];

  $x = 10;
  if ($x++ == 10) echo $x;
  $y = 0;
  if ($y-- == 0) echo $y;

  $heading = "Date\tName\tPayment";
  echo $heading;
?>
