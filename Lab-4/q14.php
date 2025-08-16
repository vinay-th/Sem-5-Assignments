<!-- Q14. Make an HTML form to enter a number. In another PHP file:
• Use a function and loop to find the factorial of the number
• Show the result -->

<form action="" method="post">
    Number: <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>

<?php
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $result = factorial($number);
    echo "The factorial of $number is: $result";
}
?>