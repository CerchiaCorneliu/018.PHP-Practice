<?php
  namespace Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Person;

  class Basic extends Person implements Customer {
    public function getMonthFee(): float {
      return 5.0;
    }
    public function getAmountToBorrow(): int {
      return 3;
    }
    public function getType(): string {
      return 'Basic';
    }
    public function pay(float $amount) {
      echo "Paying $amount.";
    }
    public function isExtentOfTaxes(): bool {
      return false;
    }
  }
  /* $customer1 = new Basic(5, 'John', 'Doe', 'johndoe@mail.com');
  var_dump(checkIfValid($customer1, [$book1])); //ok
  $customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com');
  var_dump(checkIfValid($customer2, [$book1])); // fails */


?>
