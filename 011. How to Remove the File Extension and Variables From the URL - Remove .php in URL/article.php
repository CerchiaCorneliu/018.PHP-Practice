<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $articleId = $_GET['id'];
      $articleName = $_GET['name'];

      print "Article ID is:" . $articleId;
      print "<br>";
      print "Article name is:" . $articleName;

    ?>
  </body>
</html>
