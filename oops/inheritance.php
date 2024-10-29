<?php
class Employee {
    public $name, $age, $sal;

    public function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->sal = $s;
    }

    function display() {
        echo "<h2>The employee detail :</h2><br>";
        echo "Name of employee is : " . $this->name . "<br>";
        echo "Age of employee is : " . $this->age . "<br>";
        echo "Salary of employee is : " . $this->sal . "<br>";
    }
}

class Manager extends Employee {
    public $bonus, $ta, $upsal;

    public function __construct($n, $a, $s, $b, $ta) {
        parent::__construct($n, $a, $s);
        $this->bonus = $b;
        $this->ta = $ta;
        $this->upsal = $this->sal + $this->bonus + $this->ta; 
    }

    function display() {
        parent::display();
        echo "Bonus of employee is : " . $this->bonus . "<br>";
        echo "Updated Salary of employee is : " . $this->upsal . "<br>";
    }
}

$obj1 = new Employee("Ashish", 21, 1200000);
$obj1->display();

$obj2 = new Manager("John", 30, 1500000, 2000, 1000);
$obj2->display();
?>