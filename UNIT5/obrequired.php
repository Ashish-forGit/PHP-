<?php
// Include class definition
require "ob.php";
 
// Create a new object from Rectangle class
$obj = new Rectangle;
 
// Get the object properties values
echo $obj->length; // 0utput: 0
echo $obj->width; // 0utput: 0
 
// Set object properties values
$obj->length = 30;
$obj->width = 20;
 
// Read the object properties values again to show the change
echo $obj->length; // 0utput: 30
echo $obj->width; // 0utput: 20
 
 
// Call the object methods
echo $obj->getPerimeter(); // 0utput: 100
echo $obj->getArea(); // Output: 600
?>