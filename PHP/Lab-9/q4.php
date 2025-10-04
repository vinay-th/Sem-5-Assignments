<!-- 4. Extract Numbers from a String
Output: Array ( [0] => 12345 [1] => 500 ) -->
<?php
    $str = "The price is 12345 and the discount is 500";
    preg_match_all('!\d+!', $str, $matches);
    print_r($matches[0]);
?>