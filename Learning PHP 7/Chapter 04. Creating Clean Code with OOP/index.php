<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {
        margin: 0 50px;
        padding: 0;
        font-family: Verdana, sans-serif;
      }
      p {
        color: #4286f4;
        font-size: 15px;
        text-transform: uppercase;
      }
    </style>
  </head>
  <body>
    <?php
      print '<p>Classes and objects</p>';
      /* class Book {
      }
      class Customer {
      }
      $book = new Book();
      $customer = new Customer();
      $book1 = new Book();
      $book2 = new Book(); */

      print '<p>Class properties</p>';
      /* class Book {
        public $isbn;
        public $title;
        public $author;
        public $available;
      }
      $book = new Book();
      $book->title = "1984";
      $book->author = "George Orwell";
      $book->available = true;
      var_dump($book);
      // object(Book)#1 (4) { ["isbn"]=> NULL ["title"]=> string(4) "1984" ["author"]=> string(13) "George Orwell" ["available"]=> bool(true) }
      print '<br>';
      $book1 = new Book();
      $book1->title = "1984";
      $book2 = new Book();
      $book2->title = "To Kill a Mockingbird";
      var_dump($book1, $book2);
      // object(Book)#2 (4) { ["isbn"]=> NULL ["title"]=> string(4) "1984" ["author"]=> NULL ["available"]=> NULL } object(Book)#3 (4) { ["isbn"]=> NULL ["title"]=> string(21) "To Kill a Mockingbird" ["author"]=> NULL ["available"]=> NULL } */

      print '<p>Class methods</p>';
      class BookA {
        public $isbn;
        public $title;
        public $author;
        public $available;

        public function getPrintableTitle(): string {
          $result = '<i>' . $this->title . '</i> - ' . $this->author;
          if (!$this->available) {
            $result .= '<b>Not Available</b>';
          }
          return $result;
        }

        public function getCopy(): bool {
          if ($this->available < 1) {
            return false;
          } else {
            $this->available--;
            return true;
          }
        }
      }
      $bookA1 = new BookA();
      $bookA1->title = '1984';
      $bookA1->author = 'George Orwell';
      $bookA1->isbn = 9785267006323;
      $bookA1->available = 12;
      var_dump($bookA1);
      print '<br>';
      if ($bookA1->getCopy()) {
        echo 'Here, your copy.';
      } else {
        echo 'I am afraid that book is not available.';
      }

      print '<p>Class constructors</p>';
      class BookB {
        public $isbn;
        public $title;
        public $author;
        public $available;
        public function __construct(int $isbn, string $title, string $author, int $available) {
          $this->isbn = $isbn;
          $this->title = $title;
          $this->author = $author;
          $this->available = $available;
        }
      }
      $bookB1 = new BookB('1984', 'George Orwell', 9785267006323, 12);
      var_dump($bookB1);

      print '<p>Magic methods</p>';
      class BookC {
        public $isbn;
        public $title;
        public $author;
        public $available;
        public function __toString() {
           $result = '<i>' . $this->title . '</i> - ' . $this->author;
           if (!$this->available) {
           $result .= ' <b>Not available</b>';
           }
           return $result;
        }
        public function __construct(int $isbn, string $title, string $author) {
          $this->isbn = $isbn;
          $this->title = $title;
          $this->author = $author;
        }
      }
      $bookC1 = new BookC(1234, 'title', 'author');
      var_dump($bookC1);
      $string = (string) $bookC1;
      print '<br>';
      var_dump($string);


      print '<p>Properties and methods visibility</p>';
        /* class Customer {
        private $id;
        private $firstname;
        private $surname;
        private $email;
        public function __construct(int $id, string $firstname, string $surname, string $email) {
           $this->id = $id;
           $this->firstname = $firstname;
           $this->surname = $surname;
           $this->email = $email;
        }
      }
      // require_once __DIR__ . '/Book.php';
      // require_once __DIR__ . '/Customer.php';

      $customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
      var_dump($customer1);
      print '<br>';
      $customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');
      var_dump($customer2);
      print '<br>';
      // $customer1->id = 3; // Cannot access private property Customer::$id in... */


      print '<p>Encapsulation</p>';
      class CustomerA {
         private $id;
         private $name;
         private $surname;
         private $email;
         public function __construct(
           int $id,
           string $firstname,
           string $surname,
           string $email
           ) {
           $this->id = $id;
           $this->firstname = $firstname;
           $this->surname = $surname;
           $this->email = $email;
         }
         public function getId(): id {
           return $this->id;
         }
         public function getFirstname(): string {
           return $this->firstname;
         }
         public function getSurname(): string {
           return $this->surname;
         }
         public function getEmail(): string {
           return $this->email;
         }
         public function setEmail(string $email) {
           $this->email = $email;
         }
      }

      class BookD {
         private $isbn;
         private $title;
         private $author;
         private $available;
         public function __construct(
           int $isbn,
           string $title,
           string $author,
           int $available = 0
           ) {
           $this->isbn = $isbn;
           $this->title = $title;
           $this->author = $author;
           $this->available = $available;
           }
         public function getIsbn(): int {
           return $this->isbn;
         }
         public function getTitle(): string {
           return $this->title;
         }
         public function getAuthor(): string {
           return $this->author;
         }
         public function isAvailable(): bool {
           return $this->available;
         }
         public function getPrintableTitle(): string {
            $result = '<i>' . $this->title . '</i> - ' . $this->author;
            if (!$this->available) {
              $result .= ' <b>Not available</b>';
            }
            return $result;
        }
        public function getCopy(): bool {
           if ($this->available < 1) {
             return false;
           } else {
           $this->available--;
              return true;
           }
        }
        public function addCopy() {
          $this->available++;
        }
      }


      print '<p>Static properties and methods</p>';
      // ???
      /* class CustomerB {
         private $id;
         private $name;
         private $surname;
         private $email;
         public function __construct(
           int $id,
           string $firstname,
           string $surname,
           string $email
           ) {
           if ($id == null) {
             $this->id = ++self::$lastId;
           } else {
             $this->id = $id;
             if ($id > self::$lastId) {
               self::$lastId = $id;
             }
           }
           $this->firstname = $firstname;
           $this->surname = $surname;
           $this->email = $email;
         }
         public static function getLastId(): int {
           return self::$lastId;
        }
      }
      $customerB1 = new CustomerB(3, 'John', 'Doe', 'johndoe@mail.com');
      var_dump($customerB1);
      $customerB2 = new CustomerB(null, 'Mary', 'Poppins', 'mp@mail.com');
      var_dump($customerB2);
      $customerB3 = new CustomerB(7, 'James', 'Bond', '007@mail.com');
      var_dump($customerB3);
      CustomerB::getLastId();
      $customerB1::getLastId(); */


      print '<p>Namespaces</p>';
        // In the beginning of Book.php or Customer.php add...  namespace Bookstore\Domain;

        // Use... $customer = new Bookstore\Domain\Book(); instead of $book = new Book();


        // include 'book.php';
        // use Bookstore\Domain\Book;
        // $customer = new Bookstore\Domain\Book();

        // require_once __DIR__ . '/Book.php';
        // require_once __DIR__ . '/Customer.php';

        // Two Book classes. First Bookstore\Domain and Library\Domain.
        // Solve the conflict doing this:
        // use Bookstore\Domain\Book;
        // use Library\Domain\Book as LibraryBook;

      print '<p>Autoloading classes</p>';
      /* use Bookstore\Domain\Book;
      use Bookstore\Domain\Customer;
      function __autoload($classname) {
         $lastSlash = strpos($classname, '\\') + 1;
         $classname = substr($classname, $lastSlash);
         $directory = str_replace('\\', '/', $classname);
         $filename = __DIR__ . '/src/' . $directory . '.php'
         require_once($filename);
      }
      $book1 = new Book("1984", "George Orwell", 9785267006323, 12);
      $customer1 = new Customer(5, 'John', 'Doe', 'johndoe@mail.com'); */

      /* function autoloader($classname) {
         $lastSlash = strpos($classname, '\\') + 1;
         $classname = substr($classname, $lastSlash);
         $directory = str_replace('\\', '/', $classname);
         $filename = __DIR__ . '/' . $directory . '.php';
         require_once($filename);
      }
      spl_autoload_register('autoloader'); */


      print '<p>Inheritance</p>';
      print '<p>Introducing inheritance</p>';
      /* include 'person.php';
      use Bookstore\Domain\Person;
      $customer = new Bookstore\Domain\Person(); */

      print '<p>Overriding methods</p>';
      // init.php

      print '<p>Abstract classes</p>';
      // Basic.php, Premium.php
      /*
      abstract class Customer extends Person {
      //...
       abstract public function getMonthlyFee();
       abstract public function getAmountToBorrow();
       abstract public function getType();
      //...
      }
      */

      print '<p>Interfaces</p>';
    ?>
  </body>
</html>
