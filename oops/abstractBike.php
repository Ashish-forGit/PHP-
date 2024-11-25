<?php


abstract class Bike {
    protected $model;
    protected $price;

    public function __construct($model, $price) {
        $this->model = $model;
        $this->price = $price;
    }

    // Abstract method intro
    abstract public function intro();
}

// Derived class for Yamaha bikes
class Yamaha extends Bike {
    public function __construct($model, $price) {
        parent::__construct($model, $price);
    }

    public function intro() {
        echo "Introducing Yamaha: Model - " . $this->model . ", Price - " . $this->price . "<br>";
    }
}

// Derived class for Honda bikes
class Honda extends Bike {
    public function __construct($model, $price) {
        parent::__construct($model, $price);
    }

    public function intro() {
        echo "Introducing Honda: Model - " . $this->model . ", Price - " . $this->price . "<br>";
    }
}

// Derived class for Ducati bikes
class Ducati extends Bike {
    public function __construct($model, $price) {
        parent::__construct($model, $price);
    }

    public function intro() {
        echo "Introducing Ducati: Model - " . $this->model . ", Price - " . $this->price . "<br>";
    }
}

// Example usage
$yamahaBike = new Yamaha("YZF-R3", 5000);
$yamahaBike->intro();

echo "<br>";

$hondaBike = new Honda("CBR500R", 7000);
$hondaBike->intro();

echo "<br>";

$ducatiBike = new Ducati("Panigale V4", 21000);
$ducatiBike->intro();

?>
