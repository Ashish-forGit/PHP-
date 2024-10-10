<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">

        <label for="n1">Number 1:</label>
        <input type="number" name="n1" id="n1"> <br>

        <label for="n2">Number 2:</label>
        <input type="number" name="n2" id="n2"> <br>

        <label for="operation">Operation: </label>
        <select name="operation" id="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>

        </select> <br>

        <input type="submit" name="save" value="Calculate">
    </form>

    <?php
    if (isset($_POST['save'])) {

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operation = $_POST['operation'];
        $result = '';

        if (is_numeric($n1) && is_numeric($n2)) 
        {    
            switch ($operation) {
                case 'add':
                    $result = $n1 + $n2;
                    break;
                case 'subtract':
                    $result = $n1 - $n2;
                    break;
                case 'multiply':
                    $result = $n1 * $n2;
                    break;
                case 'divide':
                    if ($n2 != 0) {
                        $result = $n1 / $n2;
                    } else {
                        $result = 'Error: Division by zero';
                    }
                    break;
                default:
                    $result = 'Invalid operation';
            }
            echo "Result: $result";
        } else {
            echo "Please enter valid numbers.";
        }
    }
    ?>
</body>
</html>
