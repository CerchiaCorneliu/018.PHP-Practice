<?php
  use Bookstore\Domain\Book;
  use Bookstore\Domain\Person;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer\Basic;
  use Bookstore\Domain\Customer\Premium;
  use Bookstore\Domain\Customer\CustomerFactory;
  use Bookstore\Utils\Unique;
  use Bookstore\Exceptions\InvalidIdException;
  use Bookstore\Exceptions\ExceededMaxAllowedException;
  // use Library\Domain\Book as LibraryBook;
  require_once 'src/Domain/Book.php';
  require_once 'src/Domain/Person.php';
  require_once 'src/Domain/Customer.php';
  require_once 'src/Domain/Customer/Basic.php';
  require_once 'src/Domain/Customer/Premium.php';
  require_once 'src/Domain/Customer/CustomerFactory.php';
  require_once 'src/Utils/Unique.php';
  require_once 'src/Exceptions/InvalidIdException.php';
  require_once 'src/Exceptions/ExceededMaxAllowedException.php';

  /*
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
  */


  /*
  function __autoloader($classname) {
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


  // Polimorphism
  function processPayment(Payer $payer, float $amount) {
     if ($payer->isExtentOfTaxes()) {
     echo "What a lucky one...";
     } else {
     $amount *= 1.16;
     }
     $payer->pay($amount);
  }

  $basic = new Basic(1, "name", "surname", "email");
  $premium = new Premium(2, "name", "surname", "email");
  var_dump($basic instanceof Basic); // true
  var_dump($basic instanceof Premium); // false
  var_dump($premium instanceof Basic); // false
  var_dump($premium instanceof Premium); // true
  var_dump($basic instanceof Customer); // true
  var_dump($basic instanceof Person); // false
  var_dump($basic instanceof Payer); // false
  print '<br><br>';


  // Traits, as abstract classes or interfaces, cannot be instantiated; they are just containers of functionality that can be used from other classes.
  $basic1 = new Basic(1, "name", "surname", "email");
  $basic2 = new Basic(0, "name", "surname", "email");
  var_dump($basic1->getId()); // 1
  var_dump($basic2->getId()); // 3
  print '<br>';
  $basic = new Basic(1, "name", "surname", "email");
  $premium = new Premium(0, "name", "surname", "email");
  var_dump($basic->getId()); // 1
  var_dump($premium->getId()); // 4
  print '<br>';
  $basic = new Basic(1, "name", "surname", "email");
  $premium = new Premium(0, "name", "surname", "email");
  var_dump(Person::getLastId()); // 5
  var_dump(Unique::getLastId()); // 0
  var_dump(Basic::getLastId()); // 5
  var_dump(Premium::getLastId()); // 5
  print '<br>';

  /*
  trait Contract {
     public function sign() {
     echo "Signing the contract.";
     }
  }
  class Manager {
     use Contract;
     public function sign() {
     echo "Signing a new player.";
     }
  }
  $manager = new Manager();
  $manager->sign(); // Signing a new player.
  print '<br>';
  */

  trait Contract {
     public function sign() {
     echo "Signing the contract.";
     }
  }
  trait Communicator {
     public function sign() {
     echo "Signing to the waitress.";
     }
  }
  // class Manager {
  //   use Contract, Communicator;
  // }
  // $manager = new Manager();
  // $manager->sign();
  // Fatal error: Trait method sign has not been applied, because there are collisions with other trait methods on Manager in...

  class Manager {
     use Contract, Communicator {
     Contract::sign insteadof Communicator;
     Communicator::sign as makeASign;
     }
  }
  $manager = new Manager();
  $manager->sign(); // Signing the contract.
  $manager->makeASign(); // Signing to the waitress.
  print '<br><br>';


  // Handling exceptions
  // The try…catch block
  // $basic = new Basic(-1, "name", "surname", "email");
  // Fatal error: Uncaught Exception: Id cannot be negative. in...
  // print '<br>';
  try {
    $basic = new Basic(-1, "name", "surname", "email");
  } catch (Exception $e) {
    echo 'Something happened when creating the basic customer: '
    . $e->getMessage();
  } // Something happened when creating the basic customer: Id cannot be negative.
  print '<br>';

  // The finally block
  // scenario 1: the whole try-catch-finally
    try {
     // code that might throw an exception
    } catch (Exception $e) {
     // code that deals with the exception
    } finally {
     // finally block
    }
  // scenario 2: try-finally without catch
    try {
     // code that might throw an exception
    } finally {
     // finally block
    }
  // scenario 3: try-catch without finally
    try {
     // code that might throw an exception
    } catch (Exception $e) {
     // code that deals with the exception
    }
    print '<br>';

    /*
    function createBasicCustomer($id){
       try {
         echo "\nTrying to create a new customer.\n";
         return new Basic($id, "name", "surname", "email");
       } catch (Exception $e) {
         echo "Something happened when creating the basic customer: "
       . $e->getMessage() . "\n";
       } finally {
         echo "End of function.\n";
       }
    }
    createBasicCustomer(1);
    print '<br>';
    createBasicCustomer(-1);
    print '<br>';
    */

    // Catching different types of exceptions
    function createBasicCustomer(int $id){
       try {
         echo "\nTrying to create a new customer with id $id.\n";
         return new Basic($id, "name", "surname", "email");
       } catch (InvalidIdException $e) {
         echo "You cannot provide a negative id.\n";
       } catch (ExceededMaxAllowedException $e) {
         echo "No more customers are allowed.\n";
       } catch (Exception $e) {
         echo "Unknown exception: " . $e->getMessage();
       }
    }
    createBasicCustomer(1);
    print '<br>';
    createBasicCustomer(-1);
    // print '<br>';
    // createBasicCustomer(55); //Uncaught Bookstore\Exceptions\ExceededMaxAllowedException: Max number of users is 50. in...
    print '<br><br>';


    // Design patterns are not algorithms that you copy and paste into your program, showing how to fix something step-by-step, but rather recipes that show you, in a heuristic way, how to look for the answer.
    // A factory is a design pattern of the creational group, which means that it allows you to create objects.
    function autoloader($classname) {
       $lastSlash = strpos($classname, '\\') + 1;
       $classname = substr($classname, $lastSlash);
       $directory = str_replace('\\', '/', $classname);
       $filename = __DIR__ . '/' . $directory . '.php';
       require_once($filename);
    }
    var_dump(CustomerFactory::factory('basic', 2, 'mary', 'poppins', 'mary@poppins.com'));
    print '<br>';
    var_dump(CustomerFactory::factory('premium', 0, 'james', 'bond', 'james@bond.com'));
    print '<br><br>';


    // Singleton
    use Bookstore\Utils\Config;
    require_once 'src\Utils\Config.php';
    $config = new Config();
    $dbConfig = $config->get('db');
    var_dump($dbConfig); // array(2) { ["user"]=> string(4) "Luke" ["password"]=> string(9) "Skywalker" }
    print '<br>';
    $config = Config::getInstance();
    $dbConfig = $config->get('db');
    var_dump($dbConfig); // array(2) { ["user"]=> string(4) "Luke" ["password"]=> string(9) "Skywalker" }
    print '<br><br>';


    // Anonymous functions, or lambda functions, are functions without a name.
    $addTaxes = function (array &$book, $index, $percentage) {
      $book['price'] += round($percentage * $book['price'], 2);
    };
    var_dump($addTaxes); // object(Closure)#21 (1) { ["parameter"]=> array(3) { ["&$book"]=> string(10) "" ["$index"]=> string(10) "" ["$percentage"]=> string(10) "" } }
    print '<br>';

    $books = [
       ['title' => '1984', 'price' => 8.15],
       ['title' => 'Don Quijote', 'price' => 12.00],
       ['title' => 'Odyssey', 'price' => 3.55]
    ];
    foreach ($books as $index => $book) {
       $addTaxes($book, $index, 0.16);
    }
    var_dump($books); // array(3) { [0]=> array(2) { ["title"]=> string(4) "1984" ["price"]=> float(8.15) } [1]=> array(2) { ["title"]=> string(11) "Don Quijote" ["price"]=> float(12) } [2]=> array(2) { ["title"]=> string(7) "Odyssey" ["price"]=> float(3.55) } }
    print '<br>';
    // A callable is a variable type that identifies a function that PHP can call.
    array_walk($books, $addTaxes, 0.16);
    var_dump($books); // array(3) { [0]=> array(2) { ["title"]=> string(4) "1984" ["price"]=> float(9.45) } [1]=> array(2) { ["title"]=> string(11) "Don Quijote" ["price"]=> float(13.92) } [2]=> array(2) { ["title"]=> string(7) "Odyssey" ["price"]=> float(4.12) } }
    print '<br>';

    function addTaxes(array &$book, $index, $percentage) {
      if (isset($book['price'])) {
      $book['price'] += round($percentage * $book['price'], 2);
      }
    }
    class Taxes {
       public static function add(array &$book, $index, $percentage){
         if (isset($book['price'])) {
           $book['price'] += round($percentage * $book['price'], 2);
         }
       }
       public function addTaxes(array &$book, $index, $percentage){
         if (isset($book['price'])) {
         $book['price'] += round($percentage * $book['price'], 2);
         }
       }
    }
    // using normal function
    array_walk($books, 'addTaxes', 0.16);
    var_dump($books); //array(3) { [0]=> array(2) { ["title"]=> string(4) "1984" ["price"]=> float(10.96) } [1]=> array(2) { ["title"]=> string(11) "Don Quijote" ["price"]=> float(16.15) } [2]=> array(2) { ["title"]=> string(7) "Odyssey" ["price"]=> float(4.78) } }
    print '<br>';
    // using static class method
    array_walk($books, ['Taxes', 'add'], 0.16);
    var_dump($books); //array(3) { [0]=> array(2) { ["title"]=> string(4) "1984" ["price"]=> float(12.71) } [1]=> array(2) { ["title"]=> string(11) "Don Quijote" ["price"]=> float(18.73) } [2]=> array(2) { ["title"]=> string(7) "Odyssey" ["price"]=> float(5.54) } }
    print '<br>';
    // using class method
    array_walk($books, [new Taxes(), 'addTaxes'], 0.16);
    var_dump($books); //array(3) { [0]=> array(2) { ["title"]=> string(4) "1984" ["price"]=> float(14.74) } [1]=> array(2) { ["title"]=> string(11) "Don Quijote" ["price"]=> float(21.73) } [2]=> array(2) { ["title"]=> string(7) "Odyssey" ["price"]=> float(6.43) } }
    print '<br>';

    $percentage = 0.16;
    $addTaxes = function (array &$book, $index) use ($percentage) {
       if (isset($book['price'])) {
         $book['price'] += round($percentage * $book['price'], 2);
       }
    };
    $percentage = 100000;
    array_walk($books, $addTaxes);
    var_dump($books);
    print '<br>';

    $percentage = 0.16;
    $addTaxes = function (array &$book, $index) use (&$percentage) {
       if (isset($book['price'])) {
         $book['price'] += round($percentage * $book['price'], 2);
       }
    };
    array_walk($books, $addTaxes, 0.16);
    var_dump($books);
    print '<br>';
    $percentage = 100000;
    array_walk($books, $addTaxes, 0.16);
    var_dump($books);


?>
