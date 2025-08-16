<!-- 13 Create a PHP program that acts as a basic calculator. Use a form to input two numbers and
a dropdown for operation (Add, Subtract, Multiply, Divide). Show the result on the same
page using POST. -->
<html>
    <body>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = 0;

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Division by zero error";
                    }
                    break;
            }

            echo "<h2>Result:</h2>";
            echo "<p>$num1 $operation $num2 = $result</p>";
        }
        ?>
    </body>
</html>