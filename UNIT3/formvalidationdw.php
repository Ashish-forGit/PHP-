<?php
$errname="";
if(isset($_POST["save"]))
{
    if (empty($_POST['name'])) {
        $errname = "Name is required";
    }
    else{
echo "the name is: ", $_POST['name'];
        }
  }
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
username:<input type="text" name="name" >
<span style="color:red">* <?php echo $errname; ?></span>
<br>
<input type="submit" name="save">
</form>
</body>
</html>


