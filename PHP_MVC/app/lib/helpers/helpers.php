<?php
  function dnd($data) {
    print '<pre>';
    var_dump($data);
    print '</pre>';
    die();
  }

  function sanitize($dirty) {
    return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
  }
