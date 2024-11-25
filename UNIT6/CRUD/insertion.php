<?php
$conn= mysqli_connect('127.0.0.1','root', "","demo");
if($conn == false)
{
die("Could not connect".mysqli_connect_error());
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$marks = $_POST['marks'];
$sql="INSERT INTO students(first_name, last_name, email, city, marks)
VALUES ('$first_name', '$last_name', '$email', '$city', '$marks')";
if(mysqli_query($conn,$sql)){
echo "Inserted data successfully<br>";
echo $first_name. "-". $marks;
}else{
echo "sorry";
}
mysqli_close($conn);
?>
