<?php
// if(isset($_FILES['image']))
// {
//     echo "<pre>";
//     print_r($_FILES);
//     echo "<pre>";
// }
// echo $_FILES['image']['name'];
 $file_name=$_FILES['image']['name'];
 $file_size=$_FILES['image']['size'];
$tmpfile_name=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];

//  move_uploaded_file($tmpfile_name, "upload/". $file_name);
 if(move_uploaded_file($tmpfile_name, "upload/". $file_name))
{
echo "successfully Uploaded";
}
 else{
 echo "couldn't upload file";
}
 ?>
<html>
    <body>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image"> <br><br>
<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
