<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // $string = "My name is Daniel, Daniel is my name";
      // preg_match("/Daniel/", $string);

      /*
      if (preg_match_all("/Daniel/", $string, $array)) {
        print_r($array); // Array ( [0] => Array ( [0] => Daniel [1] => Daniel ) )
      }
      */


      /*
      if (preg_match_all("/Da(ni)el/", $string, $array)) {
        print_r($array); // Array ( [0] => Array ( [0] => Daniel [1] => Daniel ) [1] => Array ( [0] => ni [1] => ni ) )
      }
      */


      /*
      if (preg_match_all("/Da(ni)el/", $string, $array)) {
        print $array[0][1]; // Daniel
      }
      */

      $string = "My name is Daniel, Daniel is my name";
      $string2 = preg_replace("/Daniel/", "John", $string);
      print $string2; // My name is John, John is my name
    ?>
  </body>
</html>
