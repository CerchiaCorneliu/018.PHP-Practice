<?php
  namespace Bookstore\Domain;
  require_once 'Person.php';
  require 'Payer.php';

  interface Customer extends Payer {
     public function getMonthlyFee(): float;
     public function getAmountToBorrow(): int;
     public function getType(): string;
     public function getId(): int;
  }

  /* abstract class Customer extends Person {
    //...
     abstract public function getMonthlyFee();
     abstract public function getAmountToBorrow();
     abstract public function getType();
    //...
    }
  */

  /*
  class Customer extends Person {
    private static $lastId = 0;
    protected $id;
    // public $firstname;
    // public $surname;
    protected $email;

    public function __construct(
      int $id,
      string $firstname,
      string $surname,
      string $email
      ) {
      parent::__construct($id, $firstname, $surname, $email);
      if (empty($id)) {
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
   public function getId(): int {
      return $this->id;
   }
   public function getEmail(): string {
      return $this->email;
   }
   public function setEmail($email): string {
      $this->email = $email;
   }
   public function getMonthFee(): float {
     return 5.0;
   }
   public function getAmountToBorrow(): int {
     return 3;
   }
   public function getType(): string {
     return 'Basic';
   }
 } */
