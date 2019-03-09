<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Indexes arrays
      $data = array("Daniel", "John", "Jane");

      //Associative arrays
      $data = array("first" => "Daniel", "last" => "Nielsen", "age" => 25);
      // print $data[0]; // Notice: Undefined offset: 0 in C:\xampp\htdocs\018.PHP-Practice\Section 17. Different types of array in PHP.php on line 14
      // print $data["first"]; // Daniel

      //Multidimensional arrays
      $data = array(array("Daniel", "Nielsen"), "John", "Jane");

      $data1 = array(
        array(1, 2, 3),
        "John",
        "Jane"
      );
      print_r($data1); // Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => John [2] => Jane )
      print $data1[1]; // John
      print $data1[0]; // Notice: Array to string conversion in C:\xampp\htdocs\018.PHP-Practice\Section 17. Different types of array in PHP.php on line 27 Array

      print $data1[0][0]; // 1
      print $data1[0][1]; // 2
    ?>
  </body>
</html>
