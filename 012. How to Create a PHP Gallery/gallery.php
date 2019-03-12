<?php
  $_SESSION['username'] = 'Admin';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My portofolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <a href="index.html" class="header-brand">mmtuts</a>
      <nav>
        <ul>
          <li><a href="portofolio.html">Portofolio</a></li>
          <li><a href="about.html">About me</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="cases.html" class="header-class">Cases</a>
      </nav>
    </header>
    <main>
      <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>
          <div class="gallery-container">
            <?php
              include_once 'includes/dbh.inc.php';
              $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
              $stmt = mysqli_stmt_init($conn);
              if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  print '<a href="#">
                    <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                    <h3>'.$row["titleGallery"].'</h3>
                    <p>'.$row["descGallery"].'</p>
                  </a>';
                }
              } else {
                print "SQL Statement failed!";
              }
            ?>

          </div>

          <?php
          if (isset($_SESSION['username'])) {
            print '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">Upload</button>
              </form>
            </div>';
          }
          ?>
        </div>
      </section>
    </main>

    <div class="wrapper">
      <footer>
        <ul class = "footer-links-main">
          <li><a href="#">Home</a></li>
          <li><a href="#">Cases</a></li>
          <li><a href="#">Portofolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class = "footer-links-cases">
          <li><p>Latest cases</p></li>
          <li><a href="#">Web Development</a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
