<!DOCTYPE HTML>
<html>
<head>
<title>Online Bookstore Order Form</title>
</head>
<body>

<?php
// Initialize variables
$name = $email = $bookTitle = $quantity = $address = $deliveryDate = $paymentMethod = "";
$nameErr = $emailErr = $bookErr = $quantityErr = $addressErr = $dateErr = $paymentErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$isValid = true; // Track overall form validity

// Validate customer name
if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z ]{3,}$/", $_POST["name"])) {
$nameErr = "Name must contain only letters and spaces, and be at least 3 characters long.";
$isValid = false;
} else {
$name = test_input($_POST["name"]);
}

// Validate email address
if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format.";
$isValid = false;
} else {
$email = test_input($_POST["email"]);
}

// Validate book title
if (empty($_POST["bookTitle"]) || strlen($_POST["bookTitle"]) < 2) {
$bookErr = "Book title must be at least 2 characters long.";
$isValid = false;
} else {
$bookTitle = test_input($_POST["bookTitle"]);
}

// Validate quantity
if (empty($_POST["quantity"]) || !filter_var($_POST["quantity"], FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 10)))) {
$quantityErr = "Quantity must be a positive integer between 1 and 10.";
$isValid = false;
} else {
$quantity = test_input($_POST["quantity"]);
}

// Validate shipping address
if (empty($_POST["address"]) || strlen($_POST["address"]) < 10) {
$addressErr = "Shipping address must be at least 10 characters long.";
$isValid = false;
} else {
$address = test_input($_POST["address"]);
}

// Validate preferred delivery date (must be a future date)
if (empty($_POST["deliveryDate"]) || strtotime($_POST["deliveryDate"]) <= strtotime(date("Y-m-d"))) {
$dateErr = "Delivery date must be a future date.";
$isValid = false;
} else {
$deliveryDate = test_input($_POST["deliveryDate"]);
}

// Validate payment method
if (empty($_POST["paymentMethod"])) {
$paymentErr = "Please select a payment method.";
$isValid = false;
} else {
$paymentMethod = test_input($_POST["paymentMethod"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2>Online Bookstore Order Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Customer Name: <input type="text" name="name" required>
<span class="error"><?php echo $nameErr;?></span>
<br><br>
Email: <input type="email" name="email" required>
<span class="error"><?php echo $emailErr;?></span>
<br><br>
Book Title: <input type="text" name="bookTitle" required>
<span class="error"><?php echo $bookErr;?></span>
<br><br>
Quantity: <input type="number" name="quantity" min="1" max="10" required>
<span class="error"><?php echo $quantityErr;?></span>
<br><br>
Shipping Address: <textarea name="address" rows="4" cols="50" required></textarea>
<span class="error"><?php echo $addressErr;?></span>
<br><br>
Preferred Delivery Date: <input type="date" name="deliveryDate" required>
<span class="error"><?php echo $dateErr;?></span>
<br><br>
Payment Method:
<select name="paymentMethod" required>
<option value="">Select...</option>
<option value="Credit Card">Credit Card</option>
<option value="PayPal">PayPal</option>
<option value="Bank Transfer">Bank Transfer</option>
</select>
<span class="error"><?php echo $paymentErr;?></span>
<br><br>
<input type="submit" name="submit" value="Order Now">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid) {
echo "<h2>Your Order Details:</h2>";
echo "Customer Name: " . htmlspecialchars($name) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Book Title: " . htmlspecialchars($bookTitle) . "<br>";
echo "Quantity: " . htmlspecialchars($quantity) . "<br>";
echo "Shipping Address: " . htmlspecialchars($address) . "<br>";
echo "Preferred Delivery Date: " . htmlspecialchars($deliveryDate) . "<br>";
echo "Payment Method: " . htmlspecialchars($paymentMethod) . "<br>";
}
?>

</body>
</html>