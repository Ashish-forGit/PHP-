<?php
 class employee{
    public $name, $age, $salary;
 public function __construct($n, $a,$sal)
 {
    $this->name=$n;
    $this->age=$a; 
    $this->salary=$sal;
 }
public function displaydata()
{
    echo "<h1> Employee Detail: </h1><br>";
    echo "The name of the employee is: ". $this->name ."<br>";
    echo "The age of the employee is: ". $this->age."<br>";
    echo "The salary of the employee is: ". $this->salary;
}
 }
class Manager extends employee{
public $ts;
public $ta=2000;
public $bonus=8000;
function displaydata()
{
$this->tsal=$this->salary+$this->ta+$this->bonus;
echo "<h1> Manager Detail: </h1><br>";
echo "The name of the employee is: ". $this->name ."<br>";
echo "The age of the employee is: ". $this->age."<br>";
echo "The salary of the employee is: ". $this->tsal;
}
}
$ob1= new employee("Harish", 23, 40000);
$ob= new Manager("Anu", 21, 45000);
$ob1->displaydata();
 $ob->displaydata();
 





?>