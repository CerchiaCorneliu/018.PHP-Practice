<?php
  session_start();
  include_once 'dbh.php';
  $sessionid = $_SESSION['id'];

  /* $filename = "uploads/profile" . $sessionid . "*";
  $fileinfo = glob($filename);
  // print_r($fileinfo);
  $fileext = explode(".", $fileinfo[0]);
  // print_r($fileext);
  $fileactualext = $fileext[1]; */
  $file = "uploads/profile" . $sessionid . "." . $fileactualext;

  if (!unlink($file)) {
    print "File was not deleted!";
  } else {
    print "File was deleted";
  }

  $sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
  mysqli_query($conn, $sql);

  header('Location: index.php?deletesuccess');
?>
