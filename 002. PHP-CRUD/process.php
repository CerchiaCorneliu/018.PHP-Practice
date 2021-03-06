<?php
session_start();
$id = 0;
$update = false;
$name = "";
$email = "";
$location = "";

  if(isset($_POST['save'])) {
    $db = mysqli_connect('localhost', 'root', '', 'crud');
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    // mysqli_real_escape_string()
    // Protect your database against SQL injection using MySQLi
    if($db){
      $sql = "INSERT INTO data (name, email, location) VALUES(?, ?, ?)";
      $stmt = $db->prepare($sql);
      if($stmt) {
        $stmt->bind_param('sss', $name, $email, $location);
        $stmt->execute();
        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header('Location: index.php');
      } else {
        print "Database Error";
      }
    } else {
      print "Database not found";
    }
  }

  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $db = mysqli_connect('localhost', 'root', '', 'crud');
    if ($db){
      $sql = "DELETE FROM data WHERE id=$id";
      $result = mysqli_query($db, $sql);
      $_SESSION['message'] = "Record has been deleted!";
      $_SESSION['msg_type'] = "danger";
      header('Location: index.php');
    } else {
      print "Database not found";
    }
  }

  if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $db = mysqli_connect('localhost', 'root', '', 'crud');
    if ($db){
      $sql = "SELECT * FROM data WHERE id=$id";
      $result = mysqli_query($db, $sql);
      if ($result->num_rows == 1) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $email = $row['email'];
        $location = $row['location'];
      }
    } else {
      print "Database not found";
    }
  }

  if(isset($_POST['update'])) {
    $db = mysqli_connect('localhost', 'root', '', 'crud');
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $location = mysqli_real_escape_string($db,$_POST['location']);  
    if ($db){
      $sql = "UPDATE data SET name = '$name', email = '$email', location = '$location' WHERE id = $id";
      $result = mysqli_query($db, $sql);
      $_SESSION['message'] = "Record has been updated!";
      $_SESSION['msg_type'] = "warning";
      header('Location: index.php');
    } else {
      print "Database not found";
    }
  }
?>
