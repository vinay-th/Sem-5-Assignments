<!-- Q:5 Write a PHP script to display the dates for the next six Sundays and next Thursday. -->
<?php
    echo "<h1>Next 6 Sundays</h1>";
    $next_sunday = new DateTime('next Sunday');
    
    for($i = 1; $i <= 6; $i++){
        echo $next_sunday->format("l, d-m-Y") . "<br/>";
        
        $next_sunday->modify("+1 week");
    }
    
    echo "<h1>Next Thursday</h1>";
    $next_thursday = new DateTime("next Thursday");

    echo $next_thursday->format("l, d-m-Y");
?>