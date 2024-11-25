<?php

if(isset($_FILES["image"]))
{
    echo "<pre>";
    print_r($_FILES);
  echo  "</pre>";
}
$file_name=$_FILES['image']['name'];
 $file_size=$_FILES['image']['size'];
$tmpfile_name=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
 

move_uploaded_file($tmpfile_name, "uploadinfile/".$file_name );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="" enctype="multipart/form-data">
    <label for="name">User Name </label>
    <input type = "text"></input><br>
    <label for="pass">Password </label>
    <input type = "password"></input><br>
    <input type ="file" name ="image"></input><br>
    <input type="submit" name="save">
</form> 
</body>
</html>