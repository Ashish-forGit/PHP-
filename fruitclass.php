<?php
class fruits
{
public $color, $name;
function displaydata()
{
    echo "the name is".$this->name;
   
}
function displaycolor()
{
    echo "the color is", $this->color;
}

}

$o1= new fruits();
$o1->name="Apple";

$o1->displaydata();

$ob2=new fruits();
$ob2->color="Red";
$ob2->displaycolor();





// $o2= new fruits();
// $o2->color="red";
// echo "The color of the fruit is :". $o2->setcolor();

?>