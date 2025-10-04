<!-- 7. Check if String Starts with a Word Uses ^ to check start of string. -->
<?php
    $str = "PHP is shitty language";

    if(preg_match("/^PHP/", $str)){
        echo "Starts with PHP";
    }else{
        echo "Does'nt starts with PHP";
    }
?>