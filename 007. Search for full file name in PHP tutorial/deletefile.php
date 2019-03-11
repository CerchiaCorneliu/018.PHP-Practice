<?php
  // If you don't know the extension of the file...
  $path = "uploads/creativity*";
  $fileinfo = glob($path);
  // print_r($fileinfo);
  $fileactualname = $fileinfo[0];

  if (!unlink($fileactualname)) {
    print "You have an error!";
  } else {
    header ('Location: index.php?deletesuccess');
  }

?>
