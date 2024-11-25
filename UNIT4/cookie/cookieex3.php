<?php
// Initialize the cart array
$cart = isset($_COOKIE['shopping_cart']) ? unserialize($_COOKIE['shopping_cart']) : [];

if (isset($_POST['item'])) {
    // Add selected item to the cart
    $cart[] = $_POST['item'];
    // Save the cart in a cookie for 7 days
    setcookie('shopping_cart', serialize($cart), time() + (7 * 24 * 60 * 60));
}
?>

<!-- Form to add items to the shopping cart -->
<form method="POST" action="">
    <label>Add an item to your cart:</label>
    <select name="item">
        <option value="Laptop">Laptop</option>
        <option value="Smartphone">Smartphone</option>
        <option value="Headphones">Headphones</option>
    </select>
    <button type="submit">Add to Cart</button>
</form>

<h3>Your Shopping Cart</h3>
<ul>
    <?php
    if (!empty($cart)) {
        foreach ($cart as $item) {
            echo "<li>$item</li>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</ul>
