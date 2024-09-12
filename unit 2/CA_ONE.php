<?php

$items = [];

function addItem($name, $quantity, $price) {
    global $items;
    if (!isset($items[$name])) {
        $items[$name] = ["quantity" => $quantity, "price" => $price];
    } else {
        $items[$name]["quantity"] += $quantity;
    }
}

function removeItem($name, $quantity) {
    global $items;
    if (isset($items[$name])) {
        $items[$name]["quantity"] -= $quantity;
        if ($items[$name]["quantity"] <= 0) {
            unset($items[$name]);
        }
    }
}

function updateItem($name, $quantity, $price) {
    global $items;
    if (isset($items[$name])) {
        $items[$name]["quantity"] = $quantity;
        $items[$name]["price"] = $price;
    }
}

function calculateTotalInventoryValue() {
    global $items;
    $totalValue = 0;
    foreach ($items as $item) {
        $totalValue += $item["quantity"] * $item["price"];
    }
    return $totalValue;
}

function displayInventory() {
    global $items;
    foreach ($items as $name => $item) {
        echo "Item: $name, Quantity: {$item["quantity"]}, Price: {$item["price"]}\n";
    }
}

while (true) {
    echo "1. Add item\n";
    echo "2. Remove item\n";
    echo "3. Update item\n";
    echo "4. Display inventory\n";
    echo "5. Calculate total inventory value\n";
    echo "6. Exit\n";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case "1":
            echo "Enter item name: ";
            $name = trim(fgets(STDIN));
            echo "Enter quantity: ";
            $quantity = (int) trim(fgets(STDIN));
            echo "Enter price: ";
            $price = (float) trim(fgets(STDIN));
            addItem($name, $quantity, $price);
            break;

        case "2":
            echo "Enter item name: ";
            $name = trim(fgets(STDIN));
            echo "Enter quantity to remove: ";
            $quantity = (int) trim(fgets(STDIN));
            removeItem($name, $quantity);
            break;

        case "3":
            echo "Enter item name: ";
            $name = trim(fgets(STDIN));
            echo "Enter new quantity: ";
            $quantity = (int) trim(fgets(STDIN));
            echo "Enter new price: ";
            $price = (float) trim(fgets(STDIN));
            updateItem($name, $quantity, $price);
            break;

        case "4":
            displayInventory();
            break;

        case "5":
            echo "Total inventory value: " . calculateTotalInventoryValue() . "\n";
            break;

        case "6":
            exit;

        default:
            echo "Invalid choice. Please try again.\n";
    }
}

?>