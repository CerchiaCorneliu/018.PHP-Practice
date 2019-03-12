<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /* function generateKey() {
        $keyLength = 8;
        $string = "1234567890abcdefghijklmnopqrstuwxyz()/$";
        $randStr = substr(str_shuffle($string), 0, $keyLength);
        return $randStr;
      }
      print generateKey();
      */


      /* function generateKey() {
        $randStr = uniqid('daniel', true);
        return $randStr;
      }
      print generateKey();
      // daniel5c87641c40486
      // daniel5c87643a9d7a70.80890072
      */


      $conn = mysqli_connect('localhost', 'root', '', 'phpkeystring');
      function checkKeys($conn, $randStr) {
        $sql = 'SELECT * FROM keystring';
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['keystringKey'] == $randStr) {
            $keyExists = true;
            break;
          } else {
            $keyExists = false;
          }
        }
        return $keyExists;
      }

      function generateKey($conn) {
        $keyLength = 8;
        $string = "1234567890abcdefghijklmnopqrstuwxyz()/$";
        $randStr = substr(str_shuffle($string), 0, $keyLength);
        $checkKey = checkKeys($conn, $randStr);
        while ($checkKey == true) {
          $randStr = substr(str_shuffle($string), 0, $keyLength);
          $checkKey = checkKeys($conn, $randStr);
        }
        return $randStr;
      }
      print generateKey($conn);

    ?>
  </body>
</html>
