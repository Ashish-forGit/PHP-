<?php

$marks = 89;

if ($marks > 90) {
    echo "A grade";
} elseif ($marks >= 80 && $marks <= 89) {
    echo "B grade";
} elseif($marks >= 70 && $marks <= 79) {
    echo "C grade";
}
 elseif($marks >= 60 && $marks <= 69) {
    echo "D grade";
}
else {
    echo "F grade";
    }

?>
