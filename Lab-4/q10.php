<!-- Q10. Make an HTML form to enter two numbers. In another PHP file:
• Use a function to return the product of the numbers
• Show the result -->
<form action="process.php" method="post">
    Number 1: <input type="number" name="num1" required><br>
    Number 2: <input type="number" name="num2" required><br>
    <input type="submit" value="Submit">
</form>

<?php
function multiply($a, $b) {
    return $a * $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $result = multiply($num1, $num2);
    echo "The product of $num1 and $num2 is: $result";
}
?>