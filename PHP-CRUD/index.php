<!DOCTYPE html>
<html>
  <head>
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://static.doubleclick.net/instream/ad_status.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
    <?php
      require_once 'process.php';
    ?>
    <?php
    if (isset($_SESSION['message'])):
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
      print $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
    </div>
  <?php endif; ?>
    <div class="container">
      <?php
        $db = mysqli_connect('localhost', 'root', '', 'crud');
        if ($db){
          $sql = "SELECT * FROM data";
          $result = mysqli_query($db, $sql);
        } else {
          print "Database not found";
        }
      ?>

      <div class="row justify-content-center">
        <table class="table table-hover">
          <thead style="background-color: #e8f0ff; ">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Location</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?php print $row['name']; ?></td>
                <td><?php print $row['email']; ?></td>
                <td><?php print $row['location']; ?></td>
                <td>
                  <a href="index.php?edit=<?php print $row['id']; ?>" class="btn btn-info">Edit</a>
                  <a href="process.php?delete=<?php print $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
          <?php endwhile; ?>
        </table>
      </div>

      <div class="row justify-content-center">
        <form class="" action="process.php" method="post">
          <input type="hidden" name="id" value="<?php print $id; ?>">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php print $name; ?>" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php print $email; ?>" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control" value="<?php print $location; ?>" placeholder="Enter your location">
          </div>
          <div class="form-group">
            <?php
            if ($update == true):
            ?>
              <button type="submit" class="btn btn-info" name="update">Update</button>
            <?php else: ?>
              <button type="submit" class="btn btn-primary" name="save">Save</button>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
