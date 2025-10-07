<!-- Q:6 1. Write a PHP script to add and subtract 15 days from the current date.
2. Write a PHP script to use date_modify() to add and subtract 25 days form the current date. -->
<?php
    $current_date = new DateTime();
    echo "<h1>Current Date: </h1>" . "<br/>";
    print($current_date->format("d-m-Y"));
    
    echo "<h1>15 Days added to Current Date: </h1>" . "<br/>";

    $added_date = date_modify($current_date, "+15 days");
    print($current_date->format("d-m-Y"));

    echo "<h1>15 Days subtracted to Current Date: </h1>" . "<br/>";

    date_modify($current_date, "-15 days"); // to today's date
    date_modify($current_date, "-15 days"); // to get 15 days back
    print($current_date->format("d-m-Y"));
?>