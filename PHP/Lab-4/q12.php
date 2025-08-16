<!-- Q12. Make an HTML form to enter a number. In another PHP file:
• Use a function to check if it's even or odd
• Show the result -->

<form action="" method="post">
    Number: <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>

<?php
function checkEvenOdd($num) {
    return $num % 2 == 0 ? "even" : "odd";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $result = checkEvenOdd($number);
    echo "The number $number is $result.";
}
?>