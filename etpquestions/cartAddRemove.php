<?php
// Start the session
session_start();

// Products list
$products = [
    1 => ["name" => "Product A", "price" => 50],
    2 => ["name" => "Product B", "price" => 30],
    3 => ["name" => "Product C", "price" => 20],
];

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $_SESSION['cart'][$product_id] = ($_SESSION['cart'][$product_id] ?? 0) + 1;
}

// Remove from cart
if (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

// Calculate total cost
$total_cost = 0;
foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $total_cost += $products[$product_id]['price'] * $quantity;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <!-- Products -->
    <h2>Products</h2>
    <ul>
        <?php foreach ($products as $id => $product): ?>
            <li>
                <?= $product['name'] ?> - $<?= $product['price'] ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="product_id" value="<?= $id ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Cart -->
    <h2>Your Cart</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $product_id => $quantity): ?>
                <li>
                    <?= $products[$product_id]['name'] ?> - $<?= $products[$product_id]['price'] ?> x <?= $quantity ?> = $<?= $products[$product_id]['price'] * $quantity ?>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                        <button type="submit" name="remove_from_cart">Remove</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3>Total Cost: $<?= $total_cost ?></h3>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>
