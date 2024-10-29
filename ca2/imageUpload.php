<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        
        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
        }

        
        input[type="file"] {
            display: block;
            margin: 20px 0;
            
        }

        
        input[type="submit"] {
            background-color: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            padding: 10px 15px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

       
        h1 {
            text-align: center;
            color: #333;
        }

      
        .message {
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <h1>Change Profile Picture</h1>
        
        
        <?php
        session_start();
        $target_dir = "uploads/";
        $uploadOk = 1;
        $file_error = "";
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["file_name"] = $_FILES["fileToUpload"]["name"];
            $_SESSION["file_size"] = $_FILES["fileToUpload"]["size"];
            $_SESSION["file_type"] = strtolower(pathinfo($_SESSION["file_name"], PATHINFO_EXTENSION));
            $target_file = $target_dir . basename($_SESSION["file_name"]);

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check === false) {
                $file_error .= "File is not an image. ";
                $uploadOk = 0;
            }

            if (file_exists($target_file)) {
                $file_error .= "Sorry, file already exists. ";
                $uploadOk = 0;
            }

            if ($_SESSION["file_size"] > 2097152) {
                $file_error .= "Sorry, your file should not exceed 2MB in size ";
                $uploadOk = 0;
            }

            if ($_SESSION["file_type"] != "jpg" && $_SESSION["file_type"] != "jpeg" && $_SESSION["file_type"] != "png") {
                $file_error .= "Sorry, only JPG, JPEG, PNG files are allowed. ";
                $uploadOk = 0;
            }

            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $message = "<div class='message success'>Success: Profile picture uploaded successfully!</div>";
                } else {
                    $message = "<div class='message error'>Sorry, there was an error uploading your file.</div>";
                }
            } else {
                $message = "<div class='message error'>" . $file_error . "</div>";
            }
        }
        echo $message;
        ?>


        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>
</html>