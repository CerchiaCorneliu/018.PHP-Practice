<?php
  defined('DBHOST') || define('DBHOST','localhost');
  defined('DBUSERNAME') || define('DBUSERNAME','root');
  defined('DBPASSWORD') || define('DBPASSWORD','');
  defined('DBNAME') || define('DBNAME','app');
  defined('CONTROLLER') || define('CONTROLLER','index');
  defined('ACTION') || define('ACTION','index');

  function __autoload($filename) {
    $filename = strtolower($filename).'.php';
    $file = getFile($filename,ROOT);
    if(is_file($file) && file_exists($file)) {
      require_once $file;
    } else {
      throw new Exception('file $filename not found!');
    }
  }

  function getFile($filename, $directory) {
    $file = $directory.DS.$filename;
    if(file_exists($file)) {
      return $file;
    }
    $handle = opendir($directory);
    $directories = [];
    while($f = readdir($handle)) {
      if($f == '.' || $f == '..' || !is_dir($directory.DS.$f)){
        continue;
      }
      $directories[] = $f;
    }
    if(count($directories)==0) {
      return null;
    }
    foreach($directories as $dir) {
      $file = getFile($filename, $directory.DS.$dir);
      if($file) {
        return $file;
      }
    }
  }

  Session::init();
?>
