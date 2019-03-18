<?php
  namespace Bookstore\Domain;
  require_once 'Person.php';
  require 'Payer.php';

  interface Customer extends Payer {
     public function getMonthlyFee(): float;
     public function getAmountToBorrow(): int;
     public function getId(): int;
     public function getType(): string;
  }

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
   function checkIfValid(Customer $customer, array $books): bool {
     return $customer->getAmountToBorrow() >= count($books);
   }
  }

  $customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
  var_dump($customer1);
  print '<br>';
  $customer2 = new Customer(0, 'Mary', 'Poppins', 'mp@mail.com');
  var_dump($customer2);
  print '<br>';
  $customer3 = new Customer(7, 'James', 'Bond', '007@mail.com');
  var_dump($customer3);
  print '<br>';
  Customer::getLastId();
  var_dump($customer3::getLastId());
  print '<br><br>';
  */

?>
