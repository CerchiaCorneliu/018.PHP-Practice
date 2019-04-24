<?php
  class User
  {
    public $name, $password;

    function get_password()
    {
      return $this->password;
    }
  }

  $object = new User;
  $object->password = "secret";
  echo $object->get_password();
?>
