<!-- 5. Replace Words
Output: I like dogs. dogs are cute. -->
<?php
    $str = "I like cats. cats are cute.";
    $new_str = str_replace("cats", "dogs", $str);
    echo $new_str;
?>