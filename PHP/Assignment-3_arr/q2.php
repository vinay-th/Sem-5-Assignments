<!-- Write a function that will display the sorted reverse of array:
Array1(32,344,12,1,31)
Array2(“GLS UNIVERSITY”) -->
<?php
    $arr1 = array(32,344,12,1,31);
    $arr2 = array("GLS UNIVERSITY");

    echo "<h3>Sorted Array 1 in Reverse Order:</h3>";
    rsort($arr1);

    foreach($arr1 as $num){
        echo "$num<br>";
    }

    echo "<h3>Sorted Array 2 in Reverse Order:</h3>";
    rsort($arr2);

    foreach($arr2 as $str){
        echo "$str<br>";
    }
?>