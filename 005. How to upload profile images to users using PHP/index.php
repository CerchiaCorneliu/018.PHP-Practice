<?php
  session_start();
  include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="master.css">
  </head>
  <body>
    <?php
      $sql = "SELECT * FROM user";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
          $resultImg = mysqli_query($conn, $sqlImg);
          while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            print "<div class = 'user-container'>";
              if ($rowImg['status'] == 0) {
                $filename = "uploads/profile" . $id . "*";
                $fileinfo = glob($filename);
                $fileext = explode(".", $fileinfo[0]);
                $fileactualext = $fileext[1];
                print "<img src='uploads/profile".$id.".".$fileactualext."?".mt_rand()."'>";
              } else {
                print "<img src='uploads/profiledefault.png'>";
              }
              print "<p>" . $row['username'] . "</p>";
            print "</div>";
          }
        }
      } else {
        print "There are no users yet!";
      }

      if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) {
          print "You are logged in as user #1";
        }
        print "<form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>UPLOAD</button>
          </form>";
        print "<form action='deleteprofile.php' method='POST'>
            <button type='submit' name='submit'>Delete profile image</button>
          </form>";
      } else {
        print "You're not logged in!";
        print "<form action = 'signup.php' method='POST'>
            <input type = 'text' name = 'first' placeholder = 'First Name'>
            <input type = 'text' name = 'last' placeholder = 'Last Name'>
            <input type = 'text' name = 'uid' placeholder = 'UserName'>
            <input type = 'password' name = 'pwd' placeholder = 'Password'>
            <button type = 'submit' name = 'submitSignup'>Signup</button>
          </form>";
      }
    ?>

    <p>Login as User!</p>
    <form action="login.php" method="post">
      <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout as User!</p>
    <form action="logout.php" method="post">
      <button type="submit" name="submitLogout">Logout</button>
    </form>
  </body>
</html>
