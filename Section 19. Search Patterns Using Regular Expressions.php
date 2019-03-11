<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // $string = "My name is Daniel, Daniel is my name";
      // print preg_match("/Daniel/", $string); // 1

      // print preg_match("/./", $string); // 1

      // print preg_match("/(a|e)/", $string); // 1
      // print preg_match("/(a|o)/", $string); // 1
      // print preg_match("/(t|o)/", $string); // 0

      // print preg_match("/[abc]/", $string); // 1
      // print preg_match("/[^abc]/", $string); // 1
      // print preg_match("/[^My name is Daniel, Daniel is my name]/", $string); // 0
      // print preg_match("/[a-zA_Z]/", $string); // 1
      // print preg_match("/[0-9]/", $string); // 0

      // print preg_match("/D*/", $string); // 1
      // preg_match_all("/D*/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => [1] => [2] => [3] => [4] => [5] => [6] => [7] => [8] => [9] => [10] => [11] => D [12] => [13] => [14] => [15] => [16] => [17] => [18] => [19] => D [20] => [21] => [22] => [23] => [24] => [25] => [26] => [27] => [28] => [29] => [30] => [31] => [32] => [33] => [34] => [35] => [36] => ) )
      // preg_match_all("/D.*/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => Daniel, Daniel is my name ) )
      // preg_match_all("/D.*m/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => Daniel, Daniel is my nam ) )
      // preg_match_all("/D*/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => [1] => [2] => [3] => [4] => [5] => [6] => [7] => [8] => [9] => [10] => [11] => D [12] => [13] => [14] => [15] => [16] => [17] => [18] => [19] => D [20] => [21] => [22] => [23] => [24] => [25] => [26] => [27] => [28] => [29] => [30] => [31] => [32] => [33] => [34] => [35] => [36] => ) )
      // preg_match_all("/D+/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => D [1] => D ) )
      // preg_match_all("/D.+/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => Daniel, Daniel is my name ) )

      $string2 = "My 1name2 is Daniel, 1Daniel2 is my name";
      // preg_match_all("/1.*2/", $string2, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => 1name2 is Daniel, 1Daniel2 ) )
      // preg_match_all("/1.*?2/", $string2, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => 1name2 [1] => 1Daniel2 ) )

      $string = "My name is Daniel, Daniel is my name";
      // preg_match_all("/D{1}/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => D [1] => D ) )
      // preg_match("/D{1}/", $string2, $array);
      // print_r($array); // Array ( [0] => D )

      // print preg_match("/D{1}/", $string, $array); // 1
      // print preg_match("/D{2}/", $string, $array); // 0
      // print preg_match("/D{1,2}/", $string, $array); // 1
      // print preg_match("/D{1,}/", $string, $array); // 1
      // print preg_match("/D{2,}/", $string, $array); // 0

      // print preg_match("/\D{3}/", $string2, $array); // 1
      // preg_match_all("/\D{3}/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => My [1] => nam [2] => is [3] => Da [4] => nie [5] => l, [6] => Dan [7] => iel [8] => is [9] => my [10] => na ) )
      // preg_match_all("/\S{3}/", $string, $array);
      // print_r($array); // Array ( [0] => Array ( [0] => My [1] => nam [2] => e i [3] => s D [4] => ani [5] => el, [6] => Da [7] => nie [8] => l i [9] => s m [10] => y n [11] => ame ) ) Array ( [0] => Array ( [0] => nam [1] => Dan [2] => iel [3] => Dan [4] => iel [5] => nam ) )

      // print preg_match("/^M/", $string); // 1
      // print preg_match("/e$/", $string); // 1
      // print preg_match("/^M.*e$/", $string); // 1

      $string2 = "^My name is Daniel, Daniel is my name";
      print preg_match("/\^.*e$/", $string2); // 1

    ?>
  </body>
</html>
