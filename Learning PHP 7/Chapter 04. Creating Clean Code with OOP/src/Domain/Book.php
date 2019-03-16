<?php
  namespace Bookstore\Domain;
  class Book {
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

  // $book = new Book();
  // $book->title = "1984";
  // $book->author = "George Orwell";
  // $book->available = true;
  // var_dump($book);
  // object(Book)#1 (4) { ["isbn"]=> NULL ["title"]=> string(4) "1984" ["author"]=> string(13) "George Orwell" ["available"]=> bool(true) }
  // print '<br>';

  // $book1 = new Book();
  // $book1->title = "1984";
  // $book2 = new Book();
  // $book2->title = "To Kill a Mockingbird";
  // var_dump($book1, $book2);
  // object(Book)#2 (4) { ["isbn"]=> NULL ["title"]=> string(4) "1984" ["author"]=> NULL ["available"]=> NULL } object(Book)#3 (4) { ["isbn"]=> NULL ["title"]=> string(21) "To Kill a Mockingbird" ["author"]=> NULL ["available"]=> NULL }
  // print '<br>';

  // $book3 = new Book();
  // $book3->title = "1984";
  // $book3->author = "George Orwell";
  // $book3->isbn = 9785267006323;
  // $book3->available = 12;
  // if ($book->getCopy()) {
  //  echo 'Here, your copy.';
  // } else {
  //  echo 'I am afraid that book is not available.';
  // } // Here, your copy.
  // print '<br>';

  // $book4 = new Book("1984", "George Orwell", 9785267006323, 12);
  // var_dump($book4);

  // $book5 = new Book(978526714, "1984", "George Orwell", 12);
  // var_dump($book5);
  // print '<br>';

  // $book6 = new Book(978526714, "1984", "George Orwell", 0);
  // var_dump($book6);

?>
