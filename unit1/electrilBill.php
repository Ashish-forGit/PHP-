<?php
$meterType = "Residential";
$meterUnit = 150;
$total_bill = 0;

switch ($meterType) {
    case 'Residential':
        switch (true) {
            case ($meterUnit < 100):
                $total_bill = $meterUnit * 0.5;
                break;
            case ($meterUnit >= 100 && $meterUnit < 200):
                $total_bill = $meterUnit * 0.75;
                break;
            default:
                $total_bill = 100 * 0.5 + ($meterUnit - 100) * 1.0;
                break;
        }
        break;

    case 'Commercial':
        switch (true) {
            case ($meterUnit < 100):
                $total_bill = $meterUnit * 0.6;
                break;
            case ($meterUnit >= 100 && $meterUnit < 200):
                $total_bill = $meterUnit * 0.85;
                break;
            default:
                $total_bill = 100 * 0.6 + ($meterUnit - 100) * 1.2;
                break;
        }
        break;

    case 'Industrial':
        switch (true) {
            case ($meterUnit < 100):
                $total_bill = $meterUnit * 0.7;
                break;
            case ($meterUnit >= 100 && $meterUnit < 200):
                $total_bill = $meterUnit * 1.0;
                break;
            default:
                $total_bill = 100 * 0.7 + ($meterUnit - 100) * 1.5;
                break;
        }
        break;

    default:
        echo "Invalid meter type.";
        exit; // Exit to stop further execution
}

echo "Total bill: $" . $total_bill;
?>
