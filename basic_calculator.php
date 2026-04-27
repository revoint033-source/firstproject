<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

    <h2>PHP Calculator</h2>

    <form action = "basic_calculator.php" method="post">
       first number: <input type="number" name="num1" placeholder="Enter first number" required>
        <br>
        operator: <input type  = "text" name = "op"> <br>
        second number: <input type="number" name="num2" placeholder="Enter second number" required>
        <br>

        <input type="submit">
    </form>

    <h3>Result:</h3>

    <?php
    
    
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op   = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;
        } elseif ($op == "-") {
            echo $num1 - $num2;
        } elseif ($op == "*") {
            echo $num1 * $num2;
        } elseif ($op == "/") {
            if ($num2 == 0) {
                echo "Cannot divide by zero";
            } else {
                echo $num1 / $num2;
            }
        } else {
            echo "Invalid Operator";
        }
    
    ?>

</body>
</html>