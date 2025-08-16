<!-- 6 Given two numbers $a = 25 and $b = 40, write conditions using:
• Greater than
• Less than
• Greater than or equal to
• Less than or equal to
Display the result for each. -->
<?php
    $a = 25;
    $b = 40;

    if ($a > $b) {
        echo "$a is greater than $b<br/>";
    }

    if ($a < $b) {
        echo "$a is less than $b<br/>";
    }

    if ($a >= $b) {
        echo "$a is greater than or equal to $b<br/>";
    }

    if ($a <= $b) {
        echo "$a is less than or equal to $b<br/>";
    }
?>