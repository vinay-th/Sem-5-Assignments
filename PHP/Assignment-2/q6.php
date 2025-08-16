<!-- 6. Loop with Condition – Multiplication Table
Objective: Write a program to print the multiplication table of a given number using a loop (e.g., 5
× 1 = 5 … 5 × 10 = 50) -->
<?php
    $num = $_POST["in"];

    echo "<h2>";
    for ($i=1; $i <= 10; $i++) { 
        echo $num . " x " . $i . " = " . ($num * $i) . "<br/>";
    }
    echo "</h2>";
?>