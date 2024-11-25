<?php
// Base class Employee
class Employee {
    public $name;
    public $age;
    public $salary;
    // Constructor to initialize employee properties
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    // Method to display employee information
    public function displayInfo() {
        echo "Employee Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Salary: $this->salary<br>";
    }
}
// Derived class Manager that extends Employee
class Manager extends Employee {
    public $department;

    // Constructor to initialize employee and manager properties
    // public function __construct($name, $age, $salary, $department) {
    // //     // Call the parent constructor to initialize name, age, and salary
    // //     // parent::__construct($name, $age, $salary);
    //     $this->department = $department;

    // // }

    // Override the displayInfo method to include department info
    public function displayInfo() {
        // Call the parent method to display common employee info
        // parent::displayInfo();
        
        echo "name: $this->name<br>";
        echo "Department: $this->department<br>";
    }
}

// Creating an Employee object
$employee = new Employee('Alice', 28, 50000);
echo "<h3>Employee Info:</h3>";
$employee->displayInfo();

echo "<br><br>";

// Creating a Manager object
$manager = new Manager('Bob', 35, 80000, 'HR');
echo "<h3>Manager Info:</h3>";
$manager->displayInfo();

?>
