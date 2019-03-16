<?php
  use Bookstore\Domain\Book;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer\Basic;
  use Bookstore\Domain\Customer\Premium;
  // use Library\Domain\Book as LibraryBook;
  require_once 'src/Domain/Book.php';
  require_once 'src/Domain/Customer.php';
  require_once 'src/Domain/Customer/Basic.php';
  require_once 'src/Domain/Customer/Premium.php';

  $book1 = new Book(978526713, "1984", "George Orwell", 12);
  var_dump($book1);
  print '<br>';
  $book2 = new Book(978526714, "To Kill a Mockingbird", "Harper Lee", 2);
  var_dump($book2);
  print '<br><br>';

  $customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
  var_dump($customer1);
  print '<br>';
  $customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');
  var_dump($customer2);
  print '<br><br>';

  $book1->available = 2;
  var_dump($book1);
  print '<br>';
  $customer1->id = 3;
  var_dump($customer1); // Fatal error: Cannot access private property Customer::$id in...
  print '<br><br>';

  $custumer3 = new Bookstore\Domain\Customer(3, 'Me', 'Legend', 'ml@mail.com');
  var_dump($customer3);
  print '<br><br>';

  /*
  function __autoload($classname) {
     $lastSlash = strpos($classname, '\\') + 1;
     $classname = substr($classname, $lastSlash);
     $directory = str_replace('\\', '/', $classname);
     $filename = __DIR__ . '/src/' . $directory . '.php'
     require_once($filename);
  }
  $book4 = new Book("1984", "George Orwell", 9785267006323, 12);
  var_dump($book4);
  print '<br>';
  $customer4 = new Customer(5, 'John', 'Doe', 'johndoe@mail.com');
  var_dump($customer4);
  print '<br><br>';
  */

  /*
  function autoloader($classname) {
     $lastSlash = strpos($classname, '\\') + 1;
     $classname = substr($classname, $lastSlash);
     $directory = str_replace('\\', '/', $classname);
     $filename = __DIR__ . '/' . $directory . '.php';
     require_once($filename);
  }
  spl_autoload_register('autoloader');
  */

  class Pops {
    public function sayHi() {
      print "Hi, I am pops.";
    }
  }

  class Child extends Pops {
    public function sayHi() {
      print "Hi, I am a child. ";
      parent::sayHi();
    }
  }

  $pops = new Pops();
  $child = new Child();
  print $pops->sayHi();
  print '<br>';
  print $child->sayHi();
  print '<br><br>';

?>
