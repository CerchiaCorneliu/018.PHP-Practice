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
      print '<p>PHP Files</p>';
      /*
      * This is the first file loaded by the web server.
      * It prints some messages and html from other files.
      */
      // let's print a message from php
      echo 'hello world <br>';
      // and then include the rest of html
      require 'index.html';
      print '<br><br>';

      print '<p>Variables</p>';
      $a = 1;
      $b = 2;
      $c = $a + $b;
      echo $c; // 3
      /*
      $_some_value = 'abc'; // valid
      $1number = 12.3; // not valid!
      $some$signs% = '&^%'; // not valid!
      $go_2_home = "ok"; // valid
      $go_2_Home = 'no'; // this is a different variable
      $isThisCamelCase = true; // camel case
      */
      print '<br><br>';

      print '<p>Data types</p>';
      $number = 123;
      var_dump($number); // int(123)
      $number = 'abc';
      var_dump($number); // string(3) "abc"

      $a = "1";
      $b = 2;
      var_dump($a + $b); // int(3)
      var_dump($a . $b); // string(2) "12"

      print '<br><br>';

      print '<p>Operators</p>';
      print '<p>Arithmetic operators</p>';
      $a = 10;
      $b = 3;
      var_dump($a + $b); // 13
      var_dump($a - $b); // 7
      var_dump($a * $b); // 30
      var_dump($a / $b); // 3.333333...
      var_dump($a % $b); // 1
      var_dump($a ** $b); // 1000
      var_dump(-$a); // -10
      // int(13) int(7) int(30) float(3.3333333333333) int(1) int(1000) int(-10)
      print '<br>';

      print '<p>Assignment operators</p>';
      $a = 3 + 4 + 5 - 2;
      var_dump($a); // int(10)
      $a = 13;
      $a += 14; // same as $a = $a + 14;
      var_dump($a); // int(27)
      $a -= 2; // same as $a = $a - 2;
      var_dump($a); // int(25)
      $a *= 4; // same as $a = $a * 4;
      var_dump($a); // int(100)
      print '<br>';

      print '<p>Comparison operators</p>';
      var_dump(2 < 3); // bool(true)
      var_dump(3 < 3); // bool(false)
      var_dump(3 <= 3); // bool(true)
      var_dump(4 <= 3); // bool(false)
      var_dump(2 > 3); // bool(false)
      var_dump(3 >= 3); // bool(true)
      var_dump(3 > 3); // bool(false)
      // <=> (spaceship operator) that compares both the operands and returns an integer instead of a Boolean.
      var_dump(1 <=> 2); // int less than 0 // int(-1)
      var_dump(1 <=> 1); // 0 //int(0)
      var_dump(3 <=> 2); // int greater than 0 // int(1)
      print '<br>';
      $a = 3;
      $b = '3';
      $c = 5;
      var_dump($a == $b); // bool(true)
      var_dump($a === $b); // bool(false)
      var_dump($a != $b); // bool(false)
      var_dump($a !== $b); // bool(true)
      var_dump($a == $c); // bool(false)
      var_dump($a <> $c); // bool(true)
      print '<br>';

      print '<p>Logical operators</p>';
      var_dump(true && true); // bool(true)
      var_dump(true && false); // bool(false)
      var_dump(true || false); // bool(true)
      var_dump(false || false); // bool(false)
      var_dump(!false); // bool(true)
      print '<br>';

      print '<p>Incrementing and decrementing operators</p>';
      $a = 3;
      $b = $a++; // $b is 3, $a is 4
      var_dump($a, $b);
      $b = ++$a; // $a and $b are 5
      var_dump($a, $b);
      print '<br>';

      print '<p>Operator precedence</p>';
      $a = 1;
      $b = 3;
      $c = true;
      $d = false;
      $e = $a + $b > 5 || $c;
      var_dump($e); // true
      $f = $e == true && !$d;
      var_dump($f); // true
      $g = ($a + $b) * 2 + 3 * 4;
      var_dump($g); // 20
      print '<br><br>';


      print '<p>Working with strings</p>';
      $text = ' How can a clam cram in a clean cream can? ';
      echo strlen($text); // 45
      $text = trim($text);
      echo $text; // How can a clam cram in a clean cream can?
      echo strtoupper($text); // HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
      echo strtolower($text); // how can a clam cram in a clean cream can?
      $text = str_replace('can', 'could', $text);
      echo $text; // How could a clam cram in a clean cream could?
      echo substr($text, 2, 6); // w coul
      var_dump(strpos($text, 'can')); // false
      var_dump(strpos($text, 'could')); // 4
      print "<br>";
      $firstname = 'Hiro';
      $surname = 'Nakamura';
      echo 'I am ' . $firstname . ' ' . $surname . '!';
      echo "My name is $firstname $surname.\nI am a master of time and space. \"Yatta!\"";
      // \n new line
      // \t tabulation
      print '<br><br>';

      print '<p>Arrays</p>';
      /*
      List: ["Harry", "Ron", "Hermione"]
      Map: {
      "name": "James Potter",
      "status": "dead"
      }
      */

      print '<p>Initializing arrays</p>';
      $empty1 = [];
      $empty2 = array();
      $names1 = ['Harry', 'Ron', 'Hermione'];
      $names2 = array('Harry', 'Ron', 'Hermione');
      $status1 = [
        'name' => 'James Potter',
        'status' => 'dead'
      ];
      $status2 = array(
        'name' => 'James Potter',
        'status' => 'dead'
      );
      $names1 = [
        0 => 'Harry',
        1 => 'Ron',
        2 => 'Hermione'
      ];
      $books = [
        '1984' => [
          'author' => 'George Orwell',
          'finished' => true,
          'rate' => 9.5
        ],
        'Romeo and Juliet' => [
          'author' => 'William Shakespeare',
          'finished' => false
        ]
      ];

      print '<p>Populating arrays</p>';
      $names = ['Harry', 'Ron', 'Hermione'];
      $status = [
      'name' => 'James Potter',
      'status' => 'dead'
      ];
      $names[] = 'Neville';
      $status['age'] = 32;
      print_r($names); // Array ( [0] => Harry [1] => Ron [2] => Hermione [3] => Neville )
      print_r($status); // Array ( [name] => James Potter [status] => dead [age] => 32 )
      print '<br>';
      $status = [
      'name' => 'James Potter',
      'status' => 'dead'
      ];
      unset($status['status']);
      print_r ($status); // Array ( [name] => James Potter )
      print '<br>';

      print '<p>Accessing arrays</p>';
      $names = ['Harry', 'Ron', 'Hermione'];
      $names['badguy'] = 'Voldemort';
      $names[8] = 'Snape';
      $names[] = 'McGonagall';
      print_r($names); // Array ( [0] => Harry [1] => Ron [2] => Hermione [badguy] => Voldemort [8] => Snape [9] => McGonagall )
      $names = ['Harry', 'Ron', 'Hermione'];
      var_dump($names[4]); // Notice: Undefined offset: 4 in...
      // NULL
      print '<br>';

      print '<p>The empty and isset functions</p>';
      $string = '';
      $array = [];
      $names = ['Harry', 'Ron', 'Hermione'];
      var_dump(empty($string)); // true
      var_dump(empty($array)); // true
      var_dump(empty($names)); // false
      var_dump(isset($names[2])); // true
      var_dump(isset($names[3])); // false
      print '<br>';

      print '<p>Searching for elements in an array</p>';
      $names = ['Harry', 'Ron', 'Hermione'];
      $containsHermione = in_array('Hermione', $names);
      var_dump($containsHermione); // true
      $containsSnape = in_array('Snape', $names);
      var_dump($containsSnape); // false
      $wheresRon = array_search('Ron', $names);
      var_dump($wheresRon); // 1
      $wheresVoldemort = array_search('Voldemort', $names);
      var_dump($wheresVoldemort); // false
      print '<br>';

      print '<p>Ordering arrays</p>';
      $properties = [
      'firstname' => 'Tom',
      'surname' => 'Riddle',
      'house' => 'Slytherin'
      ];
      $properties1 = $properties2 = $properties3 = $properties;
      sort($properties1);
      var_dump($properties1);
      print '<br>'; // array(3) { [0]=> string(6) "Riddle" [1]=> string(9) "Slytherin" [2]=> string(3) "Tom" }
      asort($properties3);
      var_dump($properties3);
      print '<br>'; // array(3) { ["surname"]=> string(6) "Riddle" ["house"]=> string(9) "Slytherin" ["firstname"]=> string(3) "Tom" }
      ksort($properties2);
      var_dump($properties2);
      print '<br>'; // array(3) { ["firstname"]=> string(3) "Tom" ["house"]=> string(9) "Slytherin" ["surname"]=> string(6) "Riddle" }

      print '<p>Other array functions</p>';
      $properties = [
      'firstname' => 'Tom',
      'surname' => 'Riddle',
      'house' => 'Slytherin'
      ];
      $keys = array_keys($properties);
      var_dump($keys); // array(3) { [0]=> string(9) "firstname" [1]=> string(7) "surname" [2]=> string(5) "house" }
      $values = array_values($properties);
      var_dump($values); // array(3) { [0]=> string(3) "Tom" [1]=> string(6) "Riddle" [2]=> string(9) "Slytherin" }
      print '<br>';

      $names = ['Harry', 'Ron', 'Hermione'];
      $size = count($names);
      var_dump($size); // 3
      print '<br>';

      $good = ['Harry', 'Ron', 'Hermione'];
      $bad = ['Dudley', 'Vernon', 'Petunia'];
      $all = array_merge($good, $bad);
      var_dump($all); // array(6) { [0]=> string(5) "Harry" [1]=> string(3) "Ron" [2]=> string(8) "Hermione" [3]=> string(6) "Dudley" [4]=> string(6) "Vernon" [5]=> string(7) "Petunia" }
      print '<br><br>';
    ?>

    <?php
      print '<p>PHP in web applications</p>';
      print '<p>Getting information from the user</p>';
    ?>

    <p>HTML forms</p>
    <form action="authenticate.php" method="post">
      <label>Username</label>
      <input type="text" name="username" /> <br>
      <label>Password</label>
      <input type="password" name="password" /><br>
      <input type="submit" value="Login"/>
    </form>

    <p>Persisting data with cookies</p>
      <form action="SetCookie.php" method="post">
      <label>Username</label>
      <input type="text" name="username" /> <br>
      <input type="submit" value="Login"/>
    </form>

    <p>Other superglobals</p>
    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV
    <br><br>

    <?php
      print '<p>Control structures</p>';
      print '<p>Conditionals</p>';
      echo "Before the conditional.<br>";
      if (4 > 3) {
        echo "Inside the conditional.<br>";
      }
      if (3 > 4) {
        echo "This will not be printed.<br>";
      }
      echo "After the conditional.<br>";

      if (2 > 3) {
        echo "Inside the conditional.<br>";
      } else {
        echo "Inside the else.<br>";
      }

      if (4 > 5) {
        echo "Not printed";
      } elseif (4 > 4) {
        echo "Not printed";
      } elseif (4 == 4) {
        echo "Printed.";
      } elseif (4 > 2) {
        echo "Not evaluated.";
      } else {
        echo "Not evaluated.";
      }
      print "<br>";
      if (4 == 4) {
        echo "Printed";
      }
      print "<br>";
    ?>

    <?php
      if (isset($_COOKIE['username'])) {
        echo "You are " . $_COOKIE['username'];
      } else {
        echo "You are not authenticated.";
      }

      if (isset($_GET['title']) && isset($_GET['author'])) {
        print 'The book you are looking for is';
        print "<ul>
          <li><b>Title</b>".$_GET['title']."</li>
          <li><b>Author</b>".$_GET['author']."</li>
        </ul>";
      } else {
        print 'You are not looking for a book?<br>';
      }
    ?>

    <?php
      print '<p>Switch…case</p>';
      $title = 'Twilight';
      switch ($title) {
        case 'Harry Potter':
        echo "Nice story, a bit too long.";
        break;
        case 'Lord of the Rings':
        echo "A classic!";
        break;
        default:
        echo "Dunno that one.";
        break;
      }
    ?>

    <?php
      print '<p>Loops</p>';
      print '<p>While</p>';
      $i = 1;
        while ($i < 4) {
        echo $i . " ";
        $i++;
      }

      print '<p>Do…while</p>';
      echo "with while: ";
      $i = 1;
      while ($i < 0) {
        echo $i . " ";
        $i++;
      } // nothing printed
      echo "with do-while: ";
      $i = 1;
      do {
        echo $i . " ";
        $i++;
      }
      while ($i < 0); // 1

      print '<p>For</p>';
      for ($i = 1; $i < 10; $i++) {
        echo $i . " ";
      }
      print "<br>";
      $names = ['Harry', 'Ron', 'Hermione'];
      for ($i = 0; $i < count($names); $i++) {
        echo $names[$i] . " ";
      }

      print '<p>Foreach</p>';
      $names = ['Harry', 'Ron', 'Hermione'];
      foreach ($names as $name) {
        echo $name . " ";
      }
      print "<br>";
      foreach ($names as $key => $name) {
        echo $key . " -> " . $name . " ";
      }
    ?>

  <?php
    $books = [
      [
      'title' => 'To Kill A Mockingbird',
      'author' => 'Harper Lee',
      'available' => true,
      'pages' => 336,
      'isbn' => 9780061120084
      ],
      [
      'title' => '1984',
      'author' => 'George Orwell',
      'available' => true,
      'pages' => 267,
      'isbn' => 9780547249643
      ],
      [
      'title' => 'One Hundred Years Of Solitude',
      'author' => 'Gabriel Garcia Marquez',
      'available' => false,
      'pages' => 457,
      'isbn' => 9785267006323
      ],
    ];
  ?>
  <ul>
    <?php
      foreach ($books as $book):
    ?>
      <li>
        <i><?php echo $book['title']; ?></i>
        - <?php echo $book['author']; ?>
        <?php
        if (!$book['available']): ?>
          <b>Not available</b>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul><br>


  <?php
    print '<p>Functions</p>';
    print '<p>Function declaration</p>';
    function addNumbers($a, $b) {
      $sum = $a + $b;
      return $sum;
    }
    $result = addNumbers(2, 3);
    print $result;

    print '<p>Function arguments</p>';
    function addNumbers1($a, $b, $printResult = false) {
      $sum = $a + $b;
      if ($printResult) {
        echo 'The result is ' . $sum;
      }
      return $sum;
    }
    $sum1 = addNumbers1(1, 2);
    $sum1 = addNumbers1(3, 4, false);
    $sum1 = addNumbers1(5, 6, true); // it will print the result
    print '<br>';

    function modify($a) {
      $a = 3;
    }
    $a = 2;
    modify($a);
    var_dump($a); // prints 2
  ?>

  <?php
    print '<p>The return statement</p>';
    function loginMessage() {
      if (isset($_COOKIE['username'])) {
        return "You are " . $_COOKIE['username'];
      } else {
        return "You are not authenticated.";
      }
    }
  ?>
  <p><?php echo loginMessage(); ?></p>
  <?php
  if (isset($_GET['title']) && isset($_GET['author'])){
    //...
  }
  ?>

  <?php
    print '<p>Type hinting and return types</p>';
    /*
    declare(strict_types=1);
    function addNumbers(int $a, int $b, bool $printSum): int {
      $sum = $a + $b;
      if ($printSum) {
      echo 'The sum is ' . $sum;
      }
      return $sum;
    }
    addNumbers(1, 2, true);
    addNumbers(1, '2', true); // it fails when strict_types is 1
    addNumbers(1, 'something', true); // it always fails
    print '<br>'; */
    ?>

    <?php require_once 'functions.php'; ?>
    <ul>
      <?php foreach ($books as $book): ?>
      <li><?php echo printableTitle($book); ?> </li>
      <?php endforeach; ?>
    </ul>
    <br>

    <?php
      print '<p>The filesystem</p>';
      print '<p>Reading files</p>';
      $booksJson = file_get_contents('books.json');
      $books = json_decode($booksJson, true);

      // $booksJson = file_get_contents('/home/user/bookstore/books.json');
      // $booksJson = file_get_contents(__DIR__, '/books.json');
    ?>

    <?php
      print '<p>Writing files</p>';
      require_once 'functions.php';
    ?>
    <p><?php echo loginMessage(); ?></p>
    <?php
      $booksJson = file_get_contents('books.json');
      $books = json_decode($booksJson, true);
      if (isset($_GET['title'])) {
      echo '<p>Looking for <b>' . $_GET['title'] . '</b></p>';
      } else {
      echo '<p>You are not looking for a book?</p>';
      }
      ?>
    <ul>
    <?php foreach ($books as $book): ?>
    <li>
    <a href="?title=<?php echo $book['title']; ?>">
    <?php echo printableTitle($book); ?>
    </a>
    </li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
