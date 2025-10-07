<!-- Q-4 Create an array called:
Temp(32,43,13,56,75,33,65). Display the lowest and highest value from the array. -->
<?php
    $Temp = array(32,43,13,56,75,33,65);

    $min_val = min($Temp);
    $max_val = max($Temp);

    echo "Lowest Value: $min_val<br>";
    echo "Highest Value: $max_val";
?>