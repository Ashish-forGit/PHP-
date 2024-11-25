<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="GET" action="">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero!";
                    return;
                }
                break;
        }
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
