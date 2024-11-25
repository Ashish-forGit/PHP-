<!DOCTYPE HTML><html>
<head>
<title>Event Registration Form</title>
</head>
<body>
<?php
$name = $email = $contact = $eventDate = $attendees = $comments = "";
$nameErr = $emailErr = $contactErr = $dateErr = $attendeesErr = $commentsErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validate full name
if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z ]{3,}$/", $_POST["name"])) {
$nameErr = "Full name must contain only letters and spaces, and be at least 3 characters long.";
} else {
$name = test_input($_POST["name"]);
}
// Validate email address
if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format.";
} else {
$email = test_input($_POST["email"]);
}
// Validate contact number
if (empty($_POST["contact"]) || !preg_match("/^[0-9]{10}$/", $_POST["contact"])) {
$contactErr = "Contact number must contain exactly 10 digits.";
} else {
$contact = test_input($_POST["contact"]);
}
// Validate event date (must be a future date)
if (empty($_POST["eventDate"]) || strtotime($_POST["eventDate"]) <= strtotime(date("Y-m-d"))) {
$dateErr = "Event date must be a future date.";
} else {
$eventDate = test_input($_POST["eventDate"]);
}
// Validate number of attendees
if (empty($_POST["attendees"]) || !filter_var($_POST["attendees"], 
FILTER_VALIDATE_INT, array("options" => array("min_range" => 1)))) {
$attendeesErr = "Number of attendees must be a positive integer.";
} else {
$attendees = test_input($_POST["attendees"]);
}
// Validate comments (optional, max 200 characters)
if (!empty($_POST["comments"]) && strlen($_POST["comments"]) > 200) {
$commentsErr = "Comments must not exceed 200 characters.";
} else {
$comments = test_input($_POST["comments"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2>Event Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Full Name: <input type="text" name="name" required>
<span class="error"><?php echo $nameErr;?></span>
<br><br>
Email: <input type="email" name="email" required>
<span class="error"><?php echo $emailErr;?></span>
<br><br>
Contact Number: <input type="text" name="contact" required>
<span class="error"><?php echo $contactErr;?></span>
<br><br>
Event Date: <input type="date" name="eventDate" required>
<span class="error"><?php echo $dateErr;?></span>
<br><br>
Number of Attendees: <input type="number" name="attendees" min="1" required>
<span class="error"><?php echo $attendeesErr;?></span>
<br><br>
Comments (Optional, max 200 characters): <textarea name="comments" rows="4" cols="50"></textarea>
<span class="error"><?php echo $commentsErr;?></span>
<br><br>
<input type="submit" name="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<h2>Your Registration Details:</h2>";
echo "Full Name: " . htmlspecialchars($name) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Contact Number: " . htmlspecialchars($contact) . "<br>";
echo "Event Date: " . htmlspecialchars($eventDate) . "<br>";
echo "Number of Attendees: " . htmlspecialchars($attendees) . "<br>";
echo "Comments: " . htmlspecialchars($comments) . "<br>";
}
?>
</body>
</html>