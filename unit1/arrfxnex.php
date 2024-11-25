Exercise 3: Inventory Management System
You have a list of items in stock, each represented by an 
associative array of item_id and item_name. 
Check if an item is available in the 
inventory using in_array and find its item_id using array_search.
 If the item exists, remove it from the array.
$inventory = [
    ["item_id" => 1, "item_name" => "Laptop"],
    ["item_id" => 2, "item_name" => "Monitor"],
    ["item_id" => 3, "item_name" => "Keyboard"],
];
$search_item = "Monitor";









$item_names = array_column($inventory, 'item_name');

if (in_array($search_item, $item_names)) {
    $index = array_search($search_item, $item_names);
    echo "Item found: " . $inventory[$index]['item_name'] . " (ID: " . $inventory[$index]['item_id'] . ")\n";
    
    // Removing the item from the inventory
    unset($inventory[$index]);
    
    echo "Item removed. Updated inventory: \n";
    print_r($inventory);
} else {
    echo "Item not found.\n";
}


Exercise 5: Order Tracking System
You are given an array of order IDs and their statuses 
(delivered, pending, canceled). Check if a specific order ID exists using
 in_array, and then use 
array_search to find the status of that order.

Solution:


$orders = [
    201 => "delivered",
    202 => "pending",
    203 => "canceled",
    204 => "not delivered"
];
$order_to_search = 202;

if (in_array($order_to_search, array_keys($orders))) {
    $status = $orders[$order_to_search];
    echo "Order ID: $order_to_search has status: $status\n";
} else {
    echo "Order ID: $order_to_search not found.\n";
}



Simple Exercise: Updating User Preferences Using array_replace_recursive
Problem Statement: You have a basic set of user preferences, and you want to allow users to change them. Write a PHP script that uses array_replace_recursive to update the default user preferences with the new preferences provided by the user.

Instructions:
Create two arrays:
$default_preferences: Contains the default preferences for a user.
$user_preferences: Contains the preferences the user wants to update.
Use array_replace_recursive to update the default preferences with the user’s preferences.
Print the final preferences after merging.







 PHP Exercises with array_replace (With Solutions)
Exercise 1: Updating Product Prices
You have an associative array representing product prices in a store. Some prices need to be updated based on a new pricing list. Use array_replace to update the prices in the original array.

Solution:

php
Copy code
$original_prices = [
    "Laptop" => 1000,
    "Monitor" => 150,
    "Keyboard" => 50,
    "Mouse" => 25
];

$updated_prices = [
    "Laptop" => 950,
    "Monitor" => 140
];

// Replacing the original prices with the updated ones
$final_prices = array_replace($original_prices, $updated_prices);

echo "Updated Product Prices: \n";
print_r($final_prices);
Exercise 2: Merging Employee Shifts
You are managing employee shifts. You have an original array of employees and their assigned shifts. However, some shifts need to be updated or replaced due to changes. Use array_replace to merge the new shift assignments into the original one.

Solution:

php
Copy code
$original_shifts = [
    "Alice" => "Morning",
    "Bob" => "Afternoon",
    "Charlie" => "Night",
    "David" => "Morning"
];

$new_shifts = [
    "Bob" => "Night",
    "Charlie" => "Afternoon"
];

// Replacing the original shifts with the new ones
$final_shifts = array_replace($original_shifts, $new_shifts);

echo "Updated Employee Shifts: \n";
print_r($final_shifts);
Exercise 3: Replacing Default Configuration Settings
You are working on a system where default configuration settings can be overridden by user settings. Use array_replace to merge the user settings into the default configuration.

Solution:

php
Copy code
$default_config = [
    "theme" => "light",
    "language" => "English",
    "notifications" => "enabled"
];

$user_config = [
    "theme" => "dark",
    "notifications" => "disabled"
];

// Replacing the default settings with the user's preferences
$final_config = array_replace($default_config, $user_config);

echo "Final Configuration: \n";
print_r($final_config);
Exercise 4: Course Updates in a Learning Management System
You have an array representing the courses offered by a university in the current semester. Some courses need to be updated with new names or times. Use array_replace to reflect the changes.

Solution:

php
Copy code
$current_courses = [
    "CS101" => "Intro to Computer Science - 9 AM",
    "MATH101" => "Calculus I - 11 AM",
    "PHY101" => "Physics I - 2 PM"
];

$course_updates = [
    "CS101" => "Intro to Computer Science - 10 AM",
    "MATH101" => "Calculus I - 1 PM"
];

// Replacing the current course times with the updated ones
$final_courses = array_replace($current_courses, $course_updates);

echo "Updated Course Schedule: \n";
print_r($final_courses);
Exercise 5: Replacing Inventory Stock Levels
You have an array representing stock levels for various items in a warehouse. Due to new deliveries, the stock levels of some items need to be updated. Use array_replace to update the stock levels in the original array.

Solution:

php
Copy code
$current_stock = [
    "Laptops" => 50,
    "Monitors" => 30,
    "Keyboards" => 100,
    "Mice" => 75
];

$new_stock = [
    "Laptops" => 60,
    "Monitors" => 35
];

// Replacing the current stock levels with the new values
$updated_stock = array_replace($current_stock, $new_stock);

echo "Updated Inventory Stock Levels: \n";
print_r($updated_stock);