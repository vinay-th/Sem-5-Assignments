<!-- 1. Create an HTML form to enter three numbers. In a separate PHP file, calculate and display the largest number among the three using if-else statements. Show the result in a formatted table. -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        if($num1 > $num2 && $num1 > $num3){
            echo "<h1>$num1 is greater than $num2, $num3</h1>";
        } elseif($num2 > $num1 && $num2 > $num3){
            echo "<h1>$num2 is greater than $num1, $num3</h1>";
        } elseif($num3 > $num1 && $num3 > $num2){
            echo "<h1>$num3 is greater than $num2, $num1</h1>";
        } else {
            echo "<h1>Two or more numbers are equal</h1>";
        }
    }
?>