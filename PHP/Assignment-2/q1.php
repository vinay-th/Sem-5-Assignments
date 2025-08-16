<!-- 1. If Statement – Check Even or Odd
Objective: Write a PHP program to check whether a number is even or odd using the if statement.
Input: Any number.
Output: Print "Even" or "Odd". -->

<?php
    $number = 5; // You can change this number to test with different values
    if ($number % 2 == 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
?>