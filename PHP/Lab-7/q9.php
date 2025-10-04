<!-- Q9. Difference Between Two Dates
Write a PHP program to calculate the number of days left until New Year (1st Jan of next year)
using date_diff() -->
<?php
    $currentDate = date_create(date("Y-m-d"));
    $newYearDate = date_create(date("Y") + 1 . "-01-01");

    $diff = date_diff($currentDate, $newYearDate);

    echo $diff->days;
?>