<?php
  namespace Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Person;
  require_once __DIR__. '/../Customer.php';
  require_once __DIR__. '/../Person.php';

  class Basic extends Person implements Customer {
    public function getMonthlyFee(): float {
      return 5.0;
    }
    public function getAmountToBorrow(): int {
      return 3;
    }
    public function getType(): string {
      return 'Basic';
    }
    public function getId(): int {
        return $this->id;
    }
    public function pay(float $amount) {
      echo "Paying $amount.";
    }
    public function isExtentOfTaxes(): bool {
      return false;
    }
  }

  /*
  $customer1 = new Basic(5, 'John', 'Doe', 'johndoe@mail.com');
  var_dump($customer1);
  // var_dump(checkIfValid($customer1, [$book1])); //ok
  print '<br>';
  $customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com');
  var_dump($customer2);
  // var_dump(checkIfValid($customer2, [$book1])); // fails
  */

  /*
  An abstract class is a class that cannot be instantiated.

  abstract class Customer extends Person {
  //...
   abstract public function getMonthlyFee();
   abstract public function getAmountToBorrow();
   abstract public function getType();
  //...
  }
  */

?>
