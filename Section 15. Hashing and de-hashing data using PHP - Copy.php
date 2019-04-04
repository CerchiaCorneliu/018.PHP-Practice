<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // hashing
      /*
      print "test123";
      print "<br>";
      print password_hash("test123", PASSWORD_DEFAULT);
      */

      // DEHASHING
      $input = "test123";
      $hashPwdInDb = password_hash( $input, PASSWORD_DEFAULT);
      print password_verify($input, $hashPwdInDb);
    ?>
  </body>
</html>
