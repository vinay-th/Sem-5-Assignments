<!-- Q8. Creating Dates
Write a PHP program to create a custom date using mktime() and strtotime().
• Example: Create a date for 15th August 2025 at 10:30 am.
• Display it in the format "Friday, 15-Aug-2025 10:30 AM". -->
<?php
    $customTime1 = mktime(10,30,0,8,15,2025);

    echo date("l, d-M-Y h:i A", $customTime1);
?>