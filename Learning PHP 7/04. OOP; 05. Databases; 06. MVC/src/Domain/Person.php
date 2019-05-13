<?php
  namespace Bookstore\Domain;
  use Bookstore\Utils\Unique;
  require_once 'src/Utils/Unique.php';

  class Person {
    use Unique;
    private static $lastId = 0;
    protected $id;
    protected $firstname;
    protected $surname;
    protected $email;

    public function __construct(int $id, string $firstname, string $surname, string $email) {
      $this->firstname = $firstname;
      $this->surname = $surname;
      $this->email = $email;
      if (empty($id)) {
        $this->id = ++self::$lastId;
      } else {
        $this->id = $id;
        if ($id > self::$lastId) {
          self::$lastId = $id;
        }
      }
      $this->setId($id);
    }
    public function getFirstname(): string {
       return $this->firstname;
    }
    public function getSurname(): string {
       return $this->surname;
    }
    public static function getLastId(): int {
      return self::$lastId;
    }
    public function getId(): int {
      return $this->id;
    }
    public function getEmail(): string {
      return $this->email;
    }
    public function setEmail(string $email) {
      $this->email = $email;
    }
  }

?>
