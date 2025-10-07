<!-- Q:1 Write a PHP script to print the difference between current date and your birth date. -->
<?php
    $current_date = new DateTime();

    $birthday_date = new DateTime("2005-09-24");

    $diff = $current_date->diff($birthday_date);

    echo "Current date: " . $current_date->format("Y-m-d") . "<br/>";
    echo "Birthday date: " . $birthday_date->format("Y-m-d") . "<br/>";
    echo "Deference date: " . $diff->y . " years.<br/>";
?>