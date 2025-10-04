<!-- 8. Check if String Ends with a Word Uses $ to check end of string. -->
<?php
    $str = "PHP is shitty lang";

    if(preg_match("/lang$/", $str)){
        echo "Match";
    }else{
        echo "No match";
    }
?>