<?php
function removeElem(&$arr, &$index) {
  
    if (isset($arr[$index])) {
       
        $removedElement = $arr[$index];
        
        
        unset($arr[$index]);

        
        $arr = array_values($arr);

    
        return $removedElement;
    } else {
        return null; 
    }
}

$xyz = array(1, 2, 3, 4, 5, 6);
$i = 2;

$removedElem = removeElem($xyz, $i);

echo "Removed Element: $removedElem\n";
print_r($xyz); 
?>

<?php

class Inventory {
    private $items = [];

    public function addItem($name, $quantity, $price) {
        if (!isset($this->items[$name])) {
            $this->items[$name] = ["quantity" => $quantity, "price" => $price];
        } else {
            $this->items[$name]["quantity"] += $quantity;
        }
    }

    public function removeItem($name, $quantity) {
        if (isset($this->items[$name])) {
            $this->items[$name]["quantity"] -= $quantity;
            if ($this->items[$name]["quantity"] <= 0) {
                unset($this->items[$name]);
            }
        }
    }

    public function updateItem($name, $quantity, $price) {
        if (isset($this->items[$name])) {
            $this->items[$name]["quantity"] = $quantity;
            $this->items[$name]["price"] = $price;
        }
    }

    public function calculateTotalInventoryValue() {
        $totalValue = 0;
        foreach ($this->items as $item) {
            $totalValue += $item["quantity"] * $item["price"];
        }
        return $totalValue;
    }

    public function displayInventory() {
        foreach ($this->items as $name => $item) {
            echo "Item: $name, Quantity: {$item["quantity"]}, Price: {$item["price"]}\n";
        }
    }
}

$inventory = new Inventory();

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
            $inventory->addItem($name, $quantity, $price);
            break;
        case "2":
            echo "Enter item name: ";
            $name = trim(fgets(STDIN));
            echo "Enter quantity to remove: ";
            $quantity = (int) trim(fgets(STDIN));
            $inventory->removeItem($name, $quantity);
            break;
        case "3":
            echo "Enter item name: ";
            $name = trim(fgets(STDIN));
            echo "Enter new quantity: ";
            $quantity = (int) trim(fgets(STDIN));
            echo "Enter new price: ";
            $price = (float) trim(fgets(STDIN));
            $inventory->updateItem($name, $quantity, $price);
            break;
        case "4":
            $inventory->displayInventory();
            break;
        case "5":
            echo "Total inventory value: " . $inventory->calculateTotalInventoryValue() . "\n";
            break;
        case "6":
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>