<!-- Q:4 1. convert a date from yyyy-mmdd to dd-mm-yyyy
2. $date =” 10:30pm April 15 2014” Convert this string to date -->
<?php
    $inp_date = "2006-03-21";

    $newFormat = date("d-m-Y",strtotime($inp_date));
    
    $date = "10:30pm April 15 2014";

    $newFormat2 = date("h:iA F d Y", strtotime($date));

    echo $newFormat . "<br/>";
    echo $newFormat2;
?>