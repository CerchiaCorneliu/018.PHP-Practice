<?php // formtest.php
echo <<<_END
  <html>
    <head>
      <title>Form Test</title>
    </head>
    <body>
    <form method="post" action="formtest.php">
      What is your name?
      <input type="text" name="name">
      <input type="submit">
    </form>
    </body>
  </html>
_END;

  // HTML5 Enhancements
    // The autocomplete Attribute
      /*<form action='myform.php' method='post' autocomplete='on'>
         <input type='text' name='username'>
         <input type='password' name='password' autocomplete='off'>
        </form> */

    // The autofocus Attribute
      // <input type='text' name='query' autofocus='autofocus'>

    // The placeholder Attribute
      // <input type='text' name='name' size='50' placeholder='First & Last name'>

    // The required Attribute
      // <input type='text' name='creditcard' required='required'>

    // Override Attributes
      /*<form action='url1.php' method='post'>
         <input type='text' name='field'>
         <input type='submit' formaction='url2.php'>
        </form> */

    // The width and height Attributes
      // <input type='image' src='picture.png' width='120' height='80'>

    // The min and max ldap_get_attributes
      // <input type='time' name='alarm' value='07:00' min='05:00' max='09:00'>

    // The step Attribute
      // <input type='time' name='meeting' value='12:00' min='09:00' max='16:00' step='3600'>

    // The list Attribute
      /* <input type='url' name='site' list='links'>
      <datalist id='links'>
       <option label='Google' value='http://google.com'>
       <option label='Yahoo!' value='http://yahoo.com'>
       <option label='Bing' value='http://bing.com'>
       <option label='Ask' value='http://ask.com'>
      </datalist> */

    // The color Input Type
      // Choose a color <input type='color' name='color'>

    // The number and range Input Types
      /* <input type='number' name='age'>
        <input type='range' name='num' min='0' max='100' value='50' step='1'> */

    // Date and Time Pickers
      // <input type='time' name='time' value='12:34'>











?>
