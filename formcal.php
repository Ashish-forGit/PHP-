<form method="POST">  
Enter NUM1 <input type="text" name="a">  
Enter NUM2 <input type="text" name="b">  
<input type="submit" name="save">
</form>  
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
if (isset($_POST['save']))
{
$s1= new calculator();
$s1->a=$_POST['a'];
$s1->b=$_POST['b'];
echo "the sum is: ".$s1->sum(). "<br>";
echo "the subtraction is: ".$s1->sub();
}
?>