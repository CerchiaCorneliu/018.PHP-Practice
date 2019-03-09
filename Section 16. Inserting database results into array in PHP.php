<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once 'dbh.php';

      $sql = "SELECT * FROM data";
      $result = mysqli_query($conn, $sql);
      $datas = array();
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $datas[] = $row;
        }
      }
      // print_r($datas); // Array ( [0] => Array ( [id] => 1 [text] => hello ) [1] => Array ( [id] => 2 [text] => come ) [2] => Array ( [id] => 3 [text] => and ) [3] => Array ( [id] => 4 [text] => see ) [4] => Array ( [id] => 5 [text] => me ) )

      foreach ($datas[0] as $data) {
        print $data; // 1hello
      }

      foreach ($datas as $data) {
        print $data['text'] . " "; // hello come and see me
      }
    ?>
  </body>
</html>
