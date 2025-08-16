<!-- Q13. Make an HTML form to enter a number. In another PHP file:
• Use if-else to check if the number is divisible by 2, 3, or both
• Show the result -->

<form action="" method="post">
    Number: <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number % 2 == 0 && $number % 3 == 0) {
        echo "The number $number is divisible by both 2 and 3.";
    } elseif ($number % 2 == 0) {
        echo "The number $number is divisible by 2.";
    } elseif ($number % 3 == 0) {
        echo "The number $number is divisible by 3.";
    } else {
        echo "The number $number is not divisible by 2 or 3.";
    }
}
?>