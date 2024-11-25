<?php
if(file_exists("file.txt")) {
  $file = fopen("file.txt", "r");
  echo fread($file,filesize("file.txt"));
  // echo fgets($file);
  fclose($file);
} else {
  die("Error: The file does not exist.");
}
?>