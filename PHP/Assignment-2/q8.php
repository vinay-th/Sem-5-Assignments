<!-- 8. Function with Parameters – Addition
Objective: Define a function that accepts two numbers and returns their sum. Call the function with
different values -->
<?php
    function add($num1, $num2){
        return $num1 + $num2;
    }

    $num1 = $_POST["in1"];
    $num2 = $_POST["in2"];


    echo "Sum of " . $num1 . " + " . $num2 . " = " . add($num1, $num2);
?>