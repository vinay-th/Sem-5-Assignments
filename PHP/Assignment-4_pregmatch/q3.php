<!-- 3. Extract Numbers:
From the string "Order ID: 2456, Amount: 500", extract all numbers using regex. -->
<?php
    $str = "Order ID: 2456, Amount: 500";

    preg_match_all("/\d+/", $str, $matches);

    echo "Original String: $str<br>";
    echo "Extracted Numbers: ";
    print_r($matches[0]);
?>