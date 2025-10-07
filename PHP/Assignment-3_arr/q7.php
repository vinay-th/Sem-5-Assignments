<!-- Q-7 Create two one dimension array and perform addition of them. -->
<?php
    $arr1 = array(1,2,3,4,5);
    $arr2 = array(6,7,8,9,10);

    for($i = 0; $i < count($arr1); $i++) {
        $sum_arr[$i] = $arr1[$i] + $arr2[$i];
    }

    echo "Resultant Array after Addition: <br>";
    foreach($sum_arr as $value) {
        echo $value . " ";
    }
?>