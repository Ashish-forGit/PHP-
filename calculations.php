<?php
class calculator
{
public $a, $b, $c, $d;
function sum()
{ 
   return $this->c=$this->a+$this->b;
  
}
function sub()
{ 
    $this->c=$this->a-$this->b;
    return $this->c;
}
}
$s1= new calculator();
$s1->a=6;
$s1->b=3;
echo "the sum is: ".$s1->sum(). "<br>";
echo "the subtraction is: ".$s1->sub();


?>