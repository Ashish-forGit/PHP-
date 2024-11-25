<?php
// $array1=array (
//     'st'=>array("red", "green","blue"),
//    "nm1"=>array(1,2,3)

// );
// echo "<pre>";
// echo print_r($array1);
// echo "</pre>";

// echo count($array1['nm1'],1);



 $color=["red", "green", 55,"blue"];
//  echo in_array("green", $color);
//  echo array_search("red", $color);
if (in_array("55", $color, 1))
{
    echo "search successful";
    }
    else
    {
        echo "unsucessful";
    }



?>