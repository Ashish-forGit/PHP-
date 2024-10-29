<?php

class MyClass {
    
    // Constructor method
    public function __construct() {
        // _CLASS_ is incorrect, corrected to __CLASS__
        echo 'The class "' . __CLASS__ . '" was initialized!<br>';
    }

    // Destructor method
    public function __destruct() {
        // _CLASS_ is incorrect, corrected to __CLASS__
        echo 'The class "' . __CLASS__ . '" was destructed!<br>';
    }
}

// Creating an object of the class
$obj = new MyClass;

// Unsetting the object to trigger the destructor
unset($obj);

// End of script message
echo "This is the end of script.";

?>
