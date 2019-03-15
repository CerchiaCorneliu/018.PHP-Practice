<?php
setcookie('username', $_POST['username']);
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
  </head>
  <body>
    <p>You are <?php echo $_COOKIE['username']; ?></p>
    <p>Are you looking for a book? <?php echo (int) $submitted;
    ?></p>
    <p>The book you are looking for is</p>
    <ul>
      <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
      <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    </ul>
  </body>
</html>
