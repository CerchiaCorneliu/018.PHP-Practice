<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error Handler Tutorial</title>
  </head>
  <body>
    <style>
      h2 {
        text-align: center;
        text-transform: uppercase;
      }
      form {
        text-align: center;
        margin: 0px 300px;
      }
      input {
        height: 30px;
        margin: 5px auto;
        width: 290px;
        border-radius: 2px;
        border: 1px solid grey;
        padding-left: 10px;
      }
      button {
        margin: 5px auto;
        height: 35px;
        width: 300px;
        border-radius: 2px;
        border: 1px solid black;
      }
      .error {
        color: red;
        text-align: center;
      }
      .success {
        color: green;
        text-align: center;
      }
    </style>
    <h2>Signup</h2>
    <form action="error_handler.php" method="post">
      <?php
       if (isset($_GET['first'])) {
         $first = $_GET['first'];
         echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'"><br>';
       } else {
         echo '<input type="text" name="first" placeholder="Firstname">';
       }

       if (isset($_GET['last'])) {
         $last = $_GET['last'];
         echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'"><br>';
       } else {
         echo '<input type="text" name="last" placeholder="Lastname">';
       }
      ?>

      <input type="text" name="email" placeholder="E-mail">
    <?php
      if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];
        echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
      } else {
        echo '<input type="text" name="uid" placeholder="Username">';
      }
    ?>

      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
      /* $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullUrl, "signup=empty") == true) {
        print "<p class = 'error'>You did not fill in all fields!</p>";
        exit();
      }
      if (strpos($fullUrl, "signup=char") == true) {
        print "<p class = 'error'>You used invalid characters!</p>";
        exit();
      }
      if (strpos($fullUrl, "signup=email") == true) {
        print "<p class = 'error'>You used an invalid e-mail!</p>";
        exit();
      }
      if (strpos($fullUrl, "signup=success") == true) {
        print "<p class = 'success'>You have been signed up!</p>";
        exit();
      } */

      if (!isset($_GET['signup'])) {
        exit();
      } else {
        $signupCheck = $_GET['signup'];
        if ($signupCheck == "empty") {
          echo "<p class = 'error'>You did not fill in all fields!</p>";
          exit();
        } else if ($signupCheck == "char") {
          echo "<p class = 'error'>You used invalid characters!</p>";
          exit();
        } else if ($signupCheck == "email") {
          echo "<p class = 'error'>You used an invalid e-mail!</p>";
          exit();
        } else if ($signupCheck == "success") {
          echo "<p class = 'success'>You have been signed up!</p>";
          exit();
        }
      }

    ?>
  </body>
</html>
