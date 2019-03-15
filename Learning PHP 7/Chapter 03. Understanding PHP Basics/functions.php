<?php
  function printableTitle(array $book): string {
    $result = '<i>' . $book['title'] . '</i> - ' . $book['author'];
    if (!$book['available']) {
      $result .= ' <b>Not available</b>';
    }
    return $result;
  }

  function bookingBook(array &$books, string $title): bool {
    foreach ($books as $key => $book) {
      if ($book['title'] == $title) {
        if ($book['available']) {
          $books[$key]['available'] = false;
          return true;
        } else {
          return false;
        }
      }
    }
    return false;
  }

?>
