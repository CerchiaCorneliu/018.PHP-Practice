<?php
  defined('DS') || define('DS', DIRECTORY_SEPARATOR);
  defined('ROOT') || define('ROOT',dirname(__FILE__));
  require_once ROOT.DS.'configs'.DS.'app.php';
  require_once ROOT.DS.'routes.php';
  $application = new Application();
  $application->start();

  // phpinfo();
?>
