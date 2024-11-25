<?php
abstract class A {
  // Abstract method with an argument
  abstract protected function grades($marks);
}

class B extends A 
{
  public function grades($marks) 
  {
    if ($marks >= 90) 
    {
      $grade = "A grade";
    } 
    
    else if ($marks >= 70 and $marks < 90) 
    {
      $grade = "B grade";
    } 
    else if ($marks >= 40 and $marks < 70) 
    {
      $grade = "C grade";
    }
    return "$grade for $marks";
  }
}

$obj = new B;
echo $obj->grades(67);
?>
