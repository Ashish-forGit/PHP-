<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Enter Product Names</h1>
    <form method="POST">
        <label for="products">Enter product names (comma-separated):</label><br>
        <input type="text" id="products" name="products" style="width: 300px;" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Input from the form
        $input = $_POST['products'];
        
        // Split input into an array and remove whitespace
        $products = array_map('trim', explode(',', $input));
        
        // Remove duplicates and sort the array alphabetically
        $products = array_unique($products);
        sort($products);

        // Display the sorted product names
        echo "<h2>Sorted Product List:</h2><ul>";
        foreach ($products as $product) {
            echo "<li>" . htmlspecialchars($product) . "</li>";
        }
        echo "</ul>";

        // File handling
        $filename = "products.txt";
        if (file_exists($filename)) {
            // Read existing products and merge
            $existingProducts = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $allProducts = array_unique(array_merge($existingProducts, $products));
        } else {
            // If file doesn't exist, just use the current list
            $allProducts = $products;
        }

        // Sort the combined list and write it back to the file
        sort($allProducts);
        file_put_contents($filename, implode(PHP_EOL, $allProducts) . PHP_EOL);

        echo "<p>Product list has been saved to <strong>$filename</strong>.</p>";
    }
    ?>
</body>
</html>
