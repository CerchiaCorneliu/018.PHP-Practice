<?php
  // Delete single file
  /* $path = "uploads/creativity.jpg";
  if (!unlink($path)) {
    print "You have an error!";
  } else {
    // print "You have deleted the file!";
    header ('Location: index.php?deletesuccess');
  }*/

  // Delete multiple files
  $fileNames = $_POST['filename'];
  $removeSpaces = str_replace(" ", "", $fileNames);
  $allFileNames = explode(",", $removeSpaces);
  // print_r($allFileNames);
  $countAllNames = count($allFileNames);

  for ($i=0; $i < $countAllNames; $i++) {
    if (file_exists("uploads/".$allFileNames[$i]) == false) {
      header("Location: index.php?deleteerror");
      exit();
    }
  }

  for ($i=0; $i < $countAllNames; $i++) {
    $path = "uploads/".$allFileNames[$i];
    if (!unlink($path)) {
      print "You have an error!";
      exit();
    }
  }

  header ('Location: index.php?deletesuccess');


?>
