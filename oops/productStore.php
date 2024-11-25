<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Information</title>
</head>
<body>

<?php

class Product {
    protected $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Product Name: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}

class DigitalProduct extends Product {
    private $downloadLink;

    public function __construct($name, $price, $downloadLink) {
        parent::__construct($name, $price);
        $this->downloadLink = $downloadLink;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Download Link: " . $this->downloadLink . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = (float)$_POST['price'];
    $type = $_POST['type'];

    if ($type === "digital") {
        $downloadLink = $_POST['downloadLink'];
        $product = new DigitalProduct($name, $price, $downloadLink);
    } else {
        $product = new Product($name, $price);
    }

    $product->displayInfo();
}

?>

<h2>Enter Product Information</h2>
<form method="POST" action="">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required><br><br>

    <label for="type">Product Type:</label>
    <select id="type" name="type" onchange="toggleDownloadLinkField()">
        <option value="physical">Physical Product</option>
        <option value="digital">Digital Product</option>
    </select><br><br>

    <div id="downloadLinkField" style="display: none;">
        <label for="downloadLink">Download Link:</label>
        <input type="text" id="downloadLink" name="downloadLink"><br><br>
    </div>

    <input type="submit" value="Submit">
</form>

<script>
function toggleDownloadLinkField() {
    const type = document.getElementById("type").value;
    const downloadLinkField = document.getElementById("downloadLinkField");
    downloadLinkField.style.display = type === "digital" ? "block" : "none";
}
</script>

</body>
</html>
