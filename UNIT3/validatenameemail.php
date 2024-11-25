<?php
// Define variables and set to empty values
$name = $email = "";
$nameErr = $emailErr = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") 
if(isset($_POST["save"]))
{
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "INVALID EMAIL";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
    <body>
<!-- HTML Form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span style="color:red">* <?php echo $nameErr;?></span><br><br>
    Email: <input type="text" name="email">
    <span style="color:red">* <?php echo $emailErr;?></span><br><br>
    <input type="submit" value="Submit" name="save">
</form>


</body>
<html>