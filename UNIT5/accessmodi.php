<?php
// class A{
// public $name;
// Public function show()
// {
//      echo $this->name;
// }}
//  class derived extends A{
//     function get(){
//  echo "the name is:", $this->name;
//  }

//  }
// $o= new derived();
// $o->name="sonia";
// $o->get();
?>


<?php
class A{
protected $name="so";
 function show()
{
     echo $this->name;
}}
 class derived extends A{
   public function get(){
 echo "the name is:", $this->name;
 }

 }
$o= new derived();

$o->get();
?>

<?php  
class parentclass  
{    
public $name="Ajeet";  
protected $profile="HR";   
private $salary=5000000;  
public function show()  
{  
echo "Welcome : ".$this->name."<br/>";  
echo "Profile : ".$this->profile."<br/>";  
echo "Salary : ".$this->salary."<br/>";  
}  
}     
class child extends parentclass
{  
public function show1()  
{  
echo "Welcome : ".$this->name."<br/>";  
echo "Profile : ".$this->profile."<br/>";  
echo "Salary : ".$this->salary."<br/>";  
}  
}     
$obj= new child;     
$obj->show1();  
?>  