<!-- Question- 2: Storing & Initializing Arrays
1. Write a program that:
• Declares an array of 10 numbers.
• Initializes it with values from 1 to 10.
• Prints the sum and average of all elements.
2. Write a program to find the largest and smallest number from an array of 8 user-input
values. -->
<?php
    $arr = array(1,2,3,4,5,6,7,8,9,10);

    $sum = 0;

    foreach($arr as $val){
        $sum += $val;
    }

    $avg = $sum / 10;

    echo "Sum of all numbers in array: " . $sum . "<br/>";
    echo "Average of all numbers in array: " . $avg . "<br/>";


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $arr2 = array();

        for($i = 0; $i < 8; $i++){
            $arr2[] = $_POST["num".$i];
        }

        $min = $arr2[0];
        $max = 0;

        foreach($arr2 as $val){
            if($val < $min){
                $min = $val;
            }
            if($val > $max){
                $max = $val;
            }
        }

        echo "The maximum number is " . $max . "<br/>";
        echo "The minimum number is " . $min . "<br/>";
    }
?>