<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"> <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password"> <br>

        
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select> <br>

      
        <label>Subscription Plan</label>
        <input type="radio" name="plan" value="Basic"> Basic
        <input type="radio" name="plan" value="Standard"> Standard
        <input type="radio" name="plan" value="Premium"> Premium <br>

    
        <label>Select Your Hobbies</label> <br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports
        <input type="checkbox" name="hobbies[]" value="Music"> Music
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling <br>

    
        <label for="comments">Comments</label><br>
        <textarea name="comments" id="comments" rows="4" cols="50" placeholder="Enter any additional comments"></textarea> <br>

        
        <input type="submit" name="save" value="Submit">
    </form>

    <?php
    if (isset($_POST['save'])) {
        echo "Welcome, " . $_POST["name"] . "<br>";
        echo "Your Password is: " . $_POST["password"] . "<br>";
        echo "Gender: " . $_POST["gender"] . "<br>";
        echo "Subscription Plan: " . $_POST["plan"] . "<br>";

        if (isset($_POST["hobbies"])) {
            echo "Hobbies: " . implode(", ", $_POST["hobbies"]) . "<br>";
        } else {
            echo "Hobbies: None selected <br>";
        }

        echo "Comments: " . (isset($_POST["comments"]) ? $_POST["comments"] : "No comments provided") . "<br>";
    }
    ?>
</body>
</html>
