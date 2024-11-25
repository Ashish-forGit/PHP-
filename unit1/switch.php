
<?php
$customerType = 1;  // Example input for Residential
$unitsConsumed = 250;  // Example input for units consumed

$bill = 0;

switch ($customerType) {
    case 1:
        if ($unitsConsumed <= 100) {
            $bill = $unitsConsumed * 0.5;
        } elseif ($unitsConsumed <= 200) {
            $bill = (100 * 0.5) + (($unitsConsumed - 100) * 0.75);
        } else {
            $bill = (100 * 0.5) + (100 * 0.75) + (($unitsConsumed - 200) * 1);
        }
        break;
    case 2:
        if ($unitsConsumed <= 200) {
            $bill = $unitsConsumed * 1.5;
        } else {
            $bill = (200 * 1.5) + (($unitsConsumed - 200) * 2);
        }
        break;
    case 3:
        $bill = $unitsConsumed * 2.5;
        break;
    default:
        echo "Invalid customer type.";
}

if ($bill > 0) {
    echo "Total bill: $$bill";
}
?>
