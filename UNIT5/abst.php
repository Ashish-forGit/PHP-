<?php
abstract class base{
public $name;
abstract function printdata();
public function getdata()
    {
        echo "World";
    }
}
 class derived extends base{
function printdata()
{
    echo "Hello";
}

 }
  $ob= new derived();
  $ob->getdata();
  $ob->printdata();







?>