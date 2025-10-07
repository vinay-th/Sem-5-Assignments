<!-- Q:2 Write a PHP script to calculate number of days between two dates. -->
<?php
    $current_date = new DateTime();
    $inp_date = new DateTime($_POST["date1"]);

    $diff_days = $current_date->diff($inp_date);

    echo "<p>Difference in days: " . $diff_days->days . "</p>";
?>