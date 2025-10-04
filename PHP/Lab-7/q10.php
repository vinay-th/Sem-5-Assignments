<!-- Q10. Get Date Information
Write a PHP program using getdate() to display:
• Current year
• Current month (name)
• Current weekday
• Current day of the month -->
<?php
    $date = getdate();

    echo "Current year: " . $date['year'] . "<br/>";
    echo "Current month: " . $date['month'] . "<br/>";
    echo "Current week day: " . $date['weekday'] . "<br/>";
    echo "Current day of month: " . $date['mday'] . "<br/>";
?>