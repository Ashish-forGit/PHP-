<?php
abstract class Base{
    public $name;
    public $age;
    abstract function printData(); 

    public function getData()  {
        echo "World ";
    }
        
    
}

class Derived extends Base{
     function printData(){
        echo "Hello ";
     }
}

$obj = new Derived();

$obj->printData(); 
$obj->getData();

?>