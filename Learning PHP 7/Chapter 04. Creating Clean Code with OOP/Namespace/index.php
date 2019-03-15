<?php
  /*
  include 'fns.php';
  include 'sns.php';

  $object = new second\A; //qualified class name
  // I am at second space
  */

  /*
  namespace second;
  include 'fns.php';
  include 'sns.php';
  $object = new A; // unqualified class name
  //I am at second space
  print '<br>';
  $object = new \A; // fully qualified class name
  //I am at global space
  */

  include 'fns.php';
  include 'sns.php';
  use second\A as NewA;
  $object = new NewA;
  //I am at second space
  print '<br>';
  $object = new \A;
  //I am at global space
?>
