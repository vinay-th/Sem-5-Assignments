<!-- Q1. Make an HTML form to enter a number. In another PHP file, check if the number
is positive, negative, or zero using if-else. -->
<form action="q1_process.php" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if ($number > 0) {
        echo "The number is positive.";
    } elseif ($number < 0) {
        echo "The number is negative.";
    } else {
        echo "The number is zero.";
    }
}
?>