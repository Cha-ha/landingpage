<?php
// Initialize variables to store inputs and result
$number1 = $number2 = $result = "";
$operator = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    // Perform calculation based on the selected operator
    switch ($operator) {
        case "+":
            $result = $number1 + $number2;
            break;
        case "-":
            $result = $number1 - $number2;
            break;
        case "*":
            $result = $number1 * $number2;
            break;
        case "/":
            // Check if division by zero
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Error: Division by zero!";
            }
            break;
        default:
            $result = "Invalid operator!";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arithmetic Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h2 {
            color: #4CAF50;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"], select {
            padding: 8px;
            margin: 10px 0;
            width: 100px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Basic Style of PHP Arithmetic Calculator</h2>

    <form method="POST">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" value="<?php echo $number1; ?>" required><br><br>

        <label for="operator">Operator:</label>
        <select name="operator" required>
            <option value="+" <?php echo $operator == "+" ? "selected" : ""; ?>>+</option>
            <option value="-" <?php echo $operator == "-" ? "selected" : ""; ?>>-</option>
            <option value="*" <?php echo $operator == "*" ? "selected" : ""; ?>>*</option>
            <option value="/" <?php echo $operator == "/" ? "selected" : ""; ?>>/</option>
        </select><br><br>

        <label for="number2">Number 2:</label>
        <input type="number" name="number2" value="<?php echo $number2; ?>" required><br><br>

        <input type="submit" value="Calculate"><br><br>
    </form>

    <div class="result">
        <h3>Result:</h3>
        <p><?php echo $result; ?></p>
    </div>

</body>
</html>