<?php
class Vehicle {
  // Properties
  var $type;
  var $brand;

  // Methods
  function __construct($type, $brand) {
    $this->type = $type;
    $this->brand = $brand; 
  }
  function __destruct() {
    echo "The vehicle is $this->type and the brand is $this->brand"; 
  }
}

$car = new Vehicle("car", "suzuki");
?>