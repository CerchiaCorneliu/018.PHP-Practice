<?php
  define('DEBUG', true);

  define('DB_NAME', 'mvc'); // database name
  define('DB_USER', 'root'); // database user
  define('DB_PASSWORD', ''); // database password
  define('DB_HOST', '127.0.0.1'); // database host *** use new IP address to avoid DNS lookup

  define('DEFAULT_CONTROLLER', 'Home'); //default controller if there isn't one defined in the url
  define('DEFAULT_LAYOUT', 'default'); // if no layout is set in the controller user this layout.
  define('PROOT', '/018.PHP-Practice/PHP_MVC/');  //set this to '/ for live server'
  define('SITE_TITLE', 'MVC FRamework'); // This will be used if no site title is set
