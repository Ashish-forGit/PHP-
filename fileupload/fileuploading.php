<?php
if(isset($_FILES['image']))
{
    echo $_FILES['image']['name']; // assuming you want to display the uploaded image name
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"><br><br>
    <input type="submit" />
</form>