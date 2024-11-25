<?php
//Indexed Array:
// $colors=array("Saffron","White","Green");
// for($x=0; $x<count($colors);$x++)
// {
// echo $colors[$x],"<br> ";
// }

// foreach( $colors as $col)
// echo $col, "<br>";


//Associative array:
$colors=array("c1"=>"Saffron","c2"=>"White","c3"=>"Green");
// // echo $colors["c1"], "<br>";

echo "<pre>";
print_r($colors);
echo "</pre>";

foreach($colors as $key=>$value)
{
    echo "Key is:".$key." Value is:".$value."<br>";
}
$colors["c2"]="blue"; //change the value of the array element.








//array accessing with for loop.

// $courses=array('INT220'=>'PHP','INT221'=>'Laravel','INT222'=>'Nodejs');
// $keys=array_keys($courses);
// $values=array_values($courses);
// for($x=0;$x<count($courses);$x++){
// echo"Key=".$keys[$x].','."Value=".$values[$x]."<br>";
// }

?>