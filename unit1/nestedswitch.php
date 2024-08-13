<?php
$menuType = "Breakfast";

switch ($menuType) {
    case 'Breakfast':
        echo "Breakfast menu includes: <br>";
        echo "- Pancakes <br>";
        echo "- Omelette <br>";
        echo "- Fruit Salad <br>";
        echo "- Coffee <br>";
        break;
    
    case 'Lunch':
        echo "Lunch menu includes: <br>";
        echo "- Grilled Chicken <br>";
        echo "- Caesar Salad <br>";
        echo "- Garlic Bread <br>";
        echo "- Iced Tea <br>";
        break;
    
    case 'Dinner':
        echo "Dinner menu includes: <br>";
        echo "- Steak <br>";
        echo "- Mashed Potatoes <br>";
        echo "- Grilled Vegetables <br>";
        echo "- Red Wine <br>";
        break;
    
    case 'Snack':
        echo "Snack menu includes: <br>";
        echo "- Nachos <br>";
        echo "- Fruit Smoothie <br>";
        echo "- Veggie Chips <br>";
        echo "- Cheese Sticks <br>";
        break;
    
    default:
        echo "You did not choose any menu type...";
        break;
}
?>
