<?php
class person{
    public $name="anamika", $age=0;
  public function  __construct($n,$a)
        {
$this->name=$n;
$this->age=$a;
        }

    function showdata()
    {
        echo $this->name. " - ".$this->age;
    }
    }
$p1=new person("hania", 18);
// $p1->name="hania";
// $p1->age=18;
$p1->showdata();

?>