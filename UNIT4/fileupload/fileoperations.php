<!-- Here are some PHP programs that demonstrate different ways to work with files. These examples cover reading, writing, and modifying files.
Create and Write to a File
This example creates a new file (or opens it if it already exists) and writes data into it. -->
<?php
// File path
$filename = 'example.txt';

// Data to write into the file
$content = "Hello, this is a simple file writing example in PHP.\n";

// Open the file in write mode
$file = fopen($filename, "w");

// Check if the file is opened successfully
if ($file) {
    // Write content to the file
    fwrite($file, $content);
    echo "File written successfully!";
    
    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file!";
}
?>
<!-- 2. Read from a File
This example reads the content of a file and displays it on the web page. -->
<?php
// File path
$filename = 'example.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Read the content of the file
    $content = file_get_contents($filename);
    
    // Display the content
    echo nl2br($content);
} else {
    echo "File does not exist!";
}
?>
<!-- 3. Append Data to a File
This example opens a file in append mode and adds new data at the end of the file. -->
<?php
// File path
$filename = 'example.txt';

// Data to append
$newContent = "This is additional data appended to the file.\n";

// Open the file in append mode
$file = fopen($filename, "a");

// Check if the file is opened successfully
if ($file) {
    // Append the new content
    fwrite($file, $newContent);
    echo "Data appended successfully!";
    
    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file!";
}
?>
<!-- 4. Delete a File
This example demonstrates how to delete a file from the server. -->
<?php
// File path
$filename = 'example.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Delete the file
    if (unlink($filename)) {
        echo "File deleted successfully!";
    } else {
        echo "Failed to delete the file!";
    }
} else {
    echo "File does not exist!";
}
?>
<!-- 5. Copy a File
This example copies a file to a new location. -->
<?php
// File paths
$sourceFile = 'example.txt';
$destinationFile = 'backup_example.txt';

// Check if the source file exists
if (file_exists($sourceFile)) {
    // Copy the file
    if (copy($sourceFile, $destinationFile)) {
        echo "File copied successfully!";
    } else {
        echo "Failed to copy the file!";
    }
} else {
    echo "Source file does not exist!";
}
?>
<!-- 6. Move or Rename a File
This example renames or moves a file to a different directory. -->
<?php
// File paths
$oldName = 'example1.txt';
$newName = 'new_example.txt';

// Check if the file exists
if (file_exists($oldName)) {
    // Rename or move the file
    if (rename($oldName, $newName)) {
        echo "File renamed/moved successfully!";
    } else {
        echo "Failed to rename/move the file!";
    }
} else {
    echo "File does not exist!";
}
?>



