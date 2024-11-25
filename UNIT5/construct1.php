<?php
class fruits
{
public $color, $name;
function __construct($colr)
{
  $this->color=$colr;
}
function setname()
{
  return $this->color;
}
}
$o1= new fruits("red");

echo "The name of the fruit is: " .$o1->setname() ."<br>";

// $o2= new fruits();
// $o2->color="red";
// echo "The color of the fruit is :". $o2->setcolor();
?>