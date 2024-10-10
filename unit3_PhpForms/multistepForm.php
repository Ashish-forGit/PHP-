<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiStep Form - Step 2</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <label for="phone">Enter Phone</label>
        <input type="tel" name="phone" required> <br>
        <label for="address">Enter Address</label>
        <textarea name="address" required></textarea> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h2>Preview:</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
</body>
</html>
<?php
} else {
    header('Location: step1.php'); // redirect to step 1 if no data is posted
    exit;
}
?>