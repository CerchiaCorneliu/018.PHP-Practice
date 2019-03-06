<?php
  // Classes and objects
  /*
  class Book {
    var $title;
    var $author;
    var $pages;
  }

  $book1 = new book;
  $book1->title = "Harry Potter";
  $book1->author = "JK Rowling";
  $book1->pages = 400;

  $book2 = new book;
  $book2->title = "Lord of the Rings";
  $book2->author = "Tolkien";
  $book2->pages = 700;

  echo $book2->author;
  */


  // Constructors
  /*
  class Book {
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages){
      $this->title = $aTitle;
      $this->author = $aAuthor;
      $this->pages = $aPages;
    }
  }

  $book1 = new book("Harry Potter", "JK Rowling", 400);
  $book1->title = "Hunger Games";
  echo $book1->title;
  $book2 = new book("Lord of the Rings", "Tolkien", 700);
  */


  /*
  // Object functions
  class Student {
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa) {
      $this->name = $name;
      $this->major = $major;
      $this->gpa = $gpa;
    }

    function hasHonors(){
      if($this->gpa >= 3.5){
        return "true";
      }
      return "false";
    }
  }

  $student1 = new Student("Jim", "Business", 2.8);
  $student2 = new Student("Pam", "Art", 3.6);
  echo $student1 ->hasHonors(); // false
  echo $student2 ->hasHonors(); // true
  */


  // Getters & Setters
  /*
  class Movie {
    public $title;
    private $rating;

    function __construct($title, $rating){
      $this->title = $title;
      $this->setRating($rating);
    }

    function getRating() {
      return $this->rating;
    }


    //function setRating($rating) {
    //  $this->rating = $rating;
    //}

    function setRating($rating) {
      if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
        $this->rating = $rating;
      } else {
        $this->rating = "NR";
      }
    }
  }

  $avengers = new Movie("Avengers", "Dog");
  // G, PG, PG-13, R, NR
  // echo $avengers->rating;
  // Fatal error: Uncaught Error: Cannot access private property Movie::$rating in C:\xampp\htdocs\phpFiles\courseFiles\Section 14. Classes and objects.php:86 Stack trace: #0 {main} thrown in C:\xampp\htdocs\phpFiles\courseFiles\Section 14. Classes and objects.php on line 86
  // $avengers->setRating("Dog"); //Dog
  // $avengers->setRating("Dog"); //NR
  // $avengers->setRating("R"); //R
  // echo $avengers->getRating(); // PG-13
  echo $avengers->getRating();
  */

  //Inheritance
  class Chef {
    function makeChicken(){
      echo "The chef makes chicken <br>";
    }

    function makeSalad(){
      echo "The chef makes salad <br>";
    }

    function makeSpecialDish() {
      echo "The chef makes bbq ribs <br>";
    }
  }

  class ItalianChef extends Chef {
    function makePasta(){
      echo "The chef makes pasta <br>";
    }
    function makeSpecialDish(){
      echo "The chef makes chicken parm";
    }
  }

  $chef = new Chef();
  // $chef->makeChicken();
  // $chef->makePasta(); // Fatal error: Uncaught Error: Call to undefined method Chef::makePasta() in C:\xampp\htdocs\phpFiles\courseFiles\Section 14. Classes and objects.php:136 Stack trace: #0 {main} thrown in C:\xampp\htdocs\phpFiles\courseFiles\Section 14. Classes and objects.php on line 136
  $chef->makeSpecialDish();

  $italianChef = new ItalianChef();
  $italianChef->makeSpecialDish();
  
?>
