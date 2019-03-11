<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact form tutorial</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css "href="style.css">
  </head>
  <body>
    <main>
      <p>SEND E-MAIL</p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <br>
        <input type="text" name="mail" placeholder="Your e-mail">
        <br>
        <input type="text" name="subject" placeholder="Subject">
        <br>
        <textarea name="message" placeholder="Message"></textarea>
        <br>
        <button type="submit" name="submit">SEND MAIL</button>
      </form>
    </main>
  </body>
</html>
