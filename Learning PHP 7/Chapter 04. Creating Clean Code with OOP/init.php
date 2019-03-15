<?php
  /*
  class Pops {
    public function sayHi() {
      print "Hi, I am pops.";
    }
  }

  class Child extends Pops {
    public function sayHi() {
      print "Hi, I am a child.";
    }
  }

  $pops = new Pops();
  $child = new Child();
  print $pops->sayHi(); // Hi, I am pops.
  print '<br>';
  print $child->sayHi(); // Hi, I am a child.
  */


  /*
  class Pops {
    public function sayHi() {
      print "Hi, I am pops.";
    }
  }

  class Child extends Pops {
    public function sayHi() {
      print "Hi, I am a child.";
      print '<br>';
      parent::sayHi();
    }
  }

  $pops = new Pops();
  $child = new Child();
  print $pops->sayHi(); // Hi, I am pops.
  print '<br>';
  print $child->sayHi(); // Hi, I am a child. // Hi, I am pops.
  */


  class Pops {
    public function sayHi() {
      print "Hi, I am pops.";
    }
  }

  class Child extends Pops {
    protected function sayHi() {
      print "Hi, I am a child.";
    }
  }

  $pops = new Pops();
  $child = new Child();
  print $pops->sayHi();
  print '<br>';
  print $child->sayHi();
  // Fatal error: Access level to Child::sayHi() must be public (as in class Pops) in...


?>
