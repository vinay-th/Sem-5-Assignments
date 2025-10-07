<!-- Q-5 Create an array called:
Temp (32,43,13,56,75,33,65). Make a function called AVERAGE, to calculate the
average temprature. -->
<?php
    $Temp = array(32,43,13,56,75,33,65);

    function AVERAGE($arr) {
        $sum = array_sum($arr);
        $count = count($arr);
        return $sum / $count;
    }

    $avg_val = AVERAGE($Temp);

    echo "The average temperature is: " . number_format($avg_val, 2);
?>