<?php
$name="";
$errname="";
if(isset($_POST["save"]))
{
    if(empty($_POST["name"]))
    {
$errname=" Please enter name";
    }
    else
    {

      $name=test_input($_POST["name"]);
      echo "the name is ", $name;
    
}
}
  function test_input($data)
  {
$data=trim($data);
$data=htmlspecialchars($data);

$data=stripslashes($data);
  }
?>
<html>
<head></head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
<label for="name"> User name
  <input type="name" name="name"  >
  <span style="color:red">* <?php echo $errname;?></span><br><br>
  <label for="password"> Password
  <input type="password" name="password"  >  <br> <br>
<input type="Submit" name="save"> <br>
</form>




</body>
