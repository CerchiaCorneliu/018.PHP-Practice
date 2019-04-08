<?php
  use Bookstore\Domain\Book;
  use Bookstore\Domain\Person;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer\Basic;
  use Bookstore\Domain\Customer\Premium;
  use Bookstore\Domain\Customer\CustomerFactory;
  use Bookstore\Utils\Unique;
  use Bookstore\Utils\Config;
  use Bookstore\Core\ConfigCore;
  use Bookstore\Core\Request;
  use Bookstore\Core\FilteredMap;
  use Bookstore\Core\Router;
  use Bookstore\Controllers\BookController;
  use Bookstore\Controllers\CustomerController;
  use Bookstore\Controllers\ErrorController;
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
  require_once 'src/Utils/Config.php';
  require_once 'src/Core/ConfigCore.php';
  require_once 'src/Core/Request.php';
  require_once 'src/Core/FilteredMap.php';
  require_once 'src/Core/Router.php';
  require_once 'src/Controllers/BookController.php';
  require_once 'src/Controllers/CustomerController.php';
  require_once 'src/Controllers/ErrorController.php';
  require_once 'src/Exceptions/InvalidIdException.php';
  require_once 'src/Exceptions/ExceededMaxAllowedException.php';


  // Chapter 04. Creating clean code with OOP
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
    // singletons are used when you want one class to always have one unique instance. 
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
    print '<br><br><br>';



// Chapter 05. Using Database
  /*
  // Understanding schemas
    mysql> CREATE SCHEMA bookstore;
    mysql> SHOW CREATE SCHEMA bookstore
    Create Database: CREATE DATABASE `bookstore`
    mysql> USE bookstore;
    Database changed
    mysql> SHOW SCHEMAS;

  // Managing tables
  	mysql> CREATE TABLE book(
   	-> isbn CHAR(13) NOT NULL,
   	-> title VARCHAR(255) NOT NULL,
   	-> author VARCHAR(255) NOT NULL,
   	-> stock SMALLINT UNSIGNED NOT NULL DEFAULT 0,
   	-> price FLOAT UNSIGNED
   	-> ) ENGINE=InnoDb;

	   mysql> DESC book;

  	mysql> CREATE TABLE customer(
   	-> id INT UNSIGNED NOT NULL,
   	-> firstname VARCHAR(255) NOT NULL,
   	-> surname VARCHAR(255) NOT NULL,
   	-> email VARCHAR(255) NOT NULL,
   	-> type ENUM('basic', 'premium')
   	-> ) ENGINE=InnoDb;

  // Keys and constraints
  // Primary keys
  	mysql> ALTER TABLE book
   	-> ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT
   	-> PRIMARY KEY FIRST;

  	mysql> ALTER TABLE customer
   	-> MODIFY id INT UNSIGNED NOT NULL
   	-> AUTO_INCREMENT PRIMARY KEY;
  // Foreign keys
  	mysql> CREATE TABLE borrowed_books(
   	-> book_id INT UNSIGNED NOT NULL,
   	-> customer_id INT UNSIGNED NOT NULL,
   	-> start DATETIME NOT NULL,
   	-> end DATETIME DEFAULT NULL,
   	-> FOREIGN KEY (book_id) REFERENCES book(id),
   	-> FOREIGN KEY (customer_id) REFERENCES customer(id)
   	-> ) ENGINE=InnoDb;

	  mysql> SHOW CREATE TABLE borrowed_books \G

  	mysql> CREATE TABLE sale(
   	-> id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   	-> customer_id INT UNSIGNED NOT NULL,
   	-> date DATETIME NOT NULL,
   	-> FOREIGN KEY (customer_id) REFERENCES customer(id)
   	-> ) ENGINE=InnoDb;

  	mysql> CREATE TABLE sale_book(
   	-> sale_id INT UNSIGNED NOT NULL,
   	-> book_id INT UNSIGNED NOT NULL,
   	-> amount SMALLINT UNSIGNED NOT NULL DEFAULT 1,
   	-> FOREIGN KEY (sale_id) REFERENCES sale(id),
   	-> FOREIGN KEY (book_id) REFERENCES book(id)
   	-> ) ENGINE=InnoDb;
  // Unique keys
  	mysql> ALTER TABLE book ADD UNIQUE KEY (isbn);
  	mysql> ALTER TABLE customer ADD UNIQUE KEY (email);
  // Indexes
	  mysql> ALTER TABLE book ADD INDEX (title);

  // Inserting data
  	mysql> INSERT INTO customer (firstname, surname, email, type)
   	-> VALUES ("Han", "Solo", "han@tatooine.com", "premium");
  	mysql> INSERT INTO customer (firstname, surname, email, type)
   	-> VALUES ("James", "Kirk", "enter@prise", "basic");
  	mysql> INSERT INTO customer (firstname, surname, email, type)
   	-> VALUES ("Mr", "Spock", "enter@prise", "basic");
  	// ERROR 1062 (23000): Duplicate entry 'enter@prise' for key 'email'

	  mysql> INSERT INTO book (isbn,title,author,stock,price) VALUES
   	-> ("9780882339726","1984","George Orwell",12,7.50),
   	-> ("9789724621081","1Q84","Haruki Murakami",9,9.75),
   	-> ("9780736692427","Animal Farm","George Orwell",8,3.50),
   	-> ("9780307350169","Dracula","Bram Stoker",30,10.15),
   	-> ("9780753179246","19 minutes","Jodi Picoult",0,10);
  	mysql> INSERT INTO book (isbn,title,author,price) VALUES
   	-> ("9781416500360", "Odyssey", "Homer", 4.23);

  	mysql> INSERT INTO borrowed_books(book_id,customer_id,start,end)
   	-> VALUES
   	-> (1, 1, "2014-12-12", "2014-12-28"),
   	-> (4, 1, "2015-01-10", "2015-01-13"),
   	-> (4, 2, "2015-02-01", "2015-02-10"),
   	-> (1, 2, "2015-03-12", NULL);

// Querying data
  	mysql> SELECT firstname, surname, type FROM customer;
  	mysql> SELECT firstname, surname, type FROM customer
   	-> WHERE id = 1;
  	mysql> SELECT title, author, price FROM book
   	-> WHERE title LIKE "1%";
  	mysql> SELECT title, author, price FROM book
   	-> WHERE title LIKE "1%" AND stock > 0;
  	mysql> SELECT * FROM customer \G
  	mysql> SELECT COUNT(*) FROM borrowed_books
   	-> WHERE customer_id = 1 AND end IS NOT NULL;
  	mysql> SELECT id, title, author, isbn FROM book
   	-> ORDER BY title LIMIT 4;
*/

  print '<b>Using PDO</b><br>';
  // Connecting to the database
  $dbConfig = Config::getInstance()->get('db');
  $db = new PDO (
    'mysql:host=127.0.0.1;dbname=bookstore',
    $dbConfig['user'],
    $dbConfig['password']
  );
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  // Performing queries
  $rows = $db->query('SELECT * FROM book ORDER BY title');
  foreach ($rows as $row) {
    var_dump($row);
  }
  print '<br>';

  $query = 'INSERT INTO book (isbn, title, author, price) VALUES ("9788187981954", "Peter Pan", "J. M. Barrie", 2.34)';
  $result = $db->exec($query);
  var_dump($result); // false
  print '<br>';

  // <<<SQL and SQL is named heredoc;
  $query = <<<SQL
  INSERT INTO book (isbn, title, author, price)
  VALUES ("9788187981954", "Peter Pan", "J. M. Barrie", 2.34)
SQL;
  $result = $db->exec($query);
  var_dump($result); // bool(false)
  $error = $db->errorInfo()[2];
  var_dump($error); // string(46) "Duplicate entry '9788187981954' for key 'isbn'"
  print '<br>';

// Prepared statements
  $query = 'SELECT * FROM book WHERE author = :author';
  $statement = $db->prepare($query);
  $statement->bindValue('author', 'George Orwell');
  $statement->execute();
  $rows = $statement->fetchAll();
  var_dump($rows);
  print '<br>';

  $query = 'INSERT INTO book (isbn, title, author, price)
  VALUES (:isbn, :title, :author, :price)';
  $statement = $db->prepare($query);
  $params = [
   'isbn' => '9781412108614',
   'title' => 'Iliad',
   'author' => 'Homer',
   'price' => 9.25
  ];
  $statement->execute($params);
  print $db->lastInsertId(); //25
  print '<br>';

// Joining tables
/*
  SELECT CONCAT(c.firstname, ' ', c.surname) AS name,
   b.title,
   b.author,
   DATE_FORMAT(bb.start, '%d-%m-%y') AS start,
   DATE_FORMAT(bb.end, '%d-%m-%y') AS end
   FROM borrowed_books bb
   LEFT JOIN customer c ON bb.customer_id = c.id
   LEFT JOIN book b ON b.id = bb.book_id
   WHERE bb.start >= "2015-01-01";
*/
// +------------+---------+---------------+----------+----------+
// | name      | title   | author     | start    | end      |
// +------------+---------+---------------+----------+----------+
// | Han Solo | Dracula | Bram Stoker | 10-01-15 | 13-01-15 |
// | James Kirk | Dracula | Bram Stoker | 01-02-15 | 10-02-15 |
// | James Kirk | 1984 | George Orwell | 12-03-15 | NULL |
// +------------+---------+---------------+----------+----------+

// Grouping queries
/*
SELECT
  author,
  COUNT(*) AS amount,
  GROUP_CONCAT(title SEPARATOR ', ') AS titles
  FROM book
  GROUP BY author
  ORDER BY amount DESC, author;
*/
// +-----------------+--------+-------------------+
// | author | amount | titles |
// +-----------------+--------+-------------------+
// | George Orwell | 2 | 1984, Animal Farm |
// | Homer | 2 | Odyssey, Iliad |
// | Bram Stoker | 1 | Dracula |
// | Haruki Murakami | 1 | 1Q84 |
// | J. M. Barrie | 1 | Peter Pan |
// | Jodi Picoult | 1 | 19 minutes |
// +-----------------+--------+-------------------+

// Updating data
// UPDATE book SET price = 12.75 WHERE id = 2;
// UPDATE book SET price = price * 1.16;
function addBook(int $id, int $amount = 1): void {
  $db = new PDO(
    'mysql:host=127.0.0.1; dbname=bookstore',
    'root',
    ''
  );
  $query = 'UPDATE book SET stock = stock + :n WHERE id = :id';
  $statement = $db->prepare($query);
  $statement->bindValue('id', $id);
  $statement->bindValue('n', $amount);
  if(!$statement->execute()){
    throw new Exception($statement->errorInfo()[2]);
  }
} // 1
print '<br>';

// Foreign key behaviors
// SHOW CREATE TABLE borrowed_books
// ALTER TABLE borrowed_books DROP FOREIGN KEY borrowed_books_ibfk_1;
// ALTER TABLE borrowed_books DROP FOREIGN KEY borrowed_books_ibfk_2;
// ALTER TABLE borrowed_books ADD FOREIGN KEY (book_id) REFERENCES book (id) ON DELETE CASCADE ON UPDATE CASCADE, ADD FOREIGN KEY (customer_id) REFERENCES customer (id) ON DELETE CASCADE ON UPDATE CASCADE;

// Deleting data
// SELECT book_id, customer_id FROM borrowed_books;
// DELETE FROM book WHERE id = 4;
// SELECT book_id, customer_id FROM borrowed_books;

// Working with transactions
function addSale(int $userId, array $bookIds): void {
  $config = Config::getInstance();
  $dbConfig = $config->get('db');
  $db = new PDO (
    'mysql:host=127.0.0.1; dbname=bookstore',
    $dbConfig['user'],
    $dbConfig['password']
  );
  $db->beginTransaction();
  try {
    $query = 'INSERT INTO sale (customer_id, date)' . 'VALUES(:id, NOW())';
    $statement = $db->prepare($query);
    if(!$statement->execute(['id'=>$userId])) {
      throw new Exception ($statement->errorInfo()[2]);
    }
    $saleId = $db->lastInsertId();
    $query = 'INSERT INTO sale_book (sale_id, book_id)' . 'VALUES(:sale, :book)';
    $statement = $db->prepare($query);
    $statement->bindValue('sale', $saleId);
    foreach ($bookIds as $bookId) {
      $statement->bindValue('book', $bookId);
      if(!$statement->execute()) {
        throw new Exception ($statement->errorInfo()[2]);
      }
    }
    $db->commit();
  } catch (Exception $e) {
    $db->rollBack();
    throw $e;
  }

  // try {
  //   addSale(1, [1, 2, 200]);
  // } catch (Exception $e) {
  //   print 'Error adding sale: ' . $e->getMessage();
  // } // ERROR

  try {
      addSale(1, [1,2,3]);
    } catch (Exception $e) {
      print 'Error adding sale: ' . $e->getMessage();
    }
  }
  print '<br>';



  // Chapter 06. MVC
  // print '<b>MVC<b><br>';
  // $price = $request->getParams()->getNumber('price');
  // var_dump($price);
  // $price = $_POST['price'];

?>
