<?php
class Vehicle {
  public $type;
  public $brand;
  public function __construct($type, $brand) {
    $this->type = $type;
    $this->brand = $brand;
  }
  protected function intro() {
    echo "The type is $this->type and the brand is $this->brand.";
  }
}

// Car is inherited from Vehicle
class Car extends Vehicle {
  public function message() 
  {
    echo "Am I a vehicle or a car? ";
     // Call protected method from within derived class - OK
    $this -> intro();
  }
}
$car = new Car("car", "suzuki");// OK. __construct() is public
$car->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>