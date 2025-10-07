<!-- Q:3 Write a PHP script to display current date in following format.
• Year/Month/Date
• Year.Month.Date
• Year
• Date -->
<?php
    $current_date = new DateTime();

    echo "<h1>Todays date in diff display: </h1><br/>";
    echo "Y/M/D format: " . $current_date->format("Y/m/d") . "<br/>";
    echo "Y.M.D format: " . $current_date->format("Y.m.d") . "<br/>";
    echo "Year format: " . $current_date->format("Y") . "<br/>";
    echo "Date format: " . $current_date->format("d") . "<br/>";
?>