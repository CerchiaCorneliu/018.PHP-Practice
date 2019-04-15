<?php
  namespace Bookstore\Domain\Customer;
  use Bookstore\Domain\Customer;
  use Bookstore\Domain\Person;
  require_once __DIR__. '/../Customer.php';
  require_once __DIR__. '/../Person.php';

  class Premium extends Person implements Customer {
     public function getMonthlyFee(): float {
       return 10.0;
     }
     public function getAmountToBorrow(): int {
       return 10;
     }
     public function getType(): string {
       return 'Premium';
     }
     public function getId(): int {
       return $this->id;
     }
     public function pay(float $amount) {
       echo "Paying $amount.";
     }
     public function isExtentOfTaxes(): bool {
       return true;
     }
  }
