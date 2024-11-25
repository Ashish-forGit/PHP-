<?php
$books = 
array("C++" => array("name" => "Beginning with C","copies" =>8),
      "PHP" => array("name" => "Basics of PHP","copies" => 10),
      "Laravel" => array("name" => "MVC","copies" => 3)
);
 print_r($books); 

foreach ($books as $key=>$v1)
{
    echo $key,"=>", $v1 ," ";
  
    foreach($v1 as $v2)
    {
echo $v2 , " ";

    }
}
// $keys = array_keys($books);
// for($i = 0; $i < count($books); $i++) {
//     echo "<h1>$keys[$i]</h1>";
//     foreach($books[$keys[$i]] as $key => $value) {
//         echo $key . " = " . $value . "<br>";
//     }
// }
?>