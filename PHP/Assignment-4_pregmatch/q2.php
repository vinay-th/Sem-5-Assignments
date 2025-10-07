<!-- 2. Check Start of String:
Write a PHP script to check if a given string starts with the word “Hello”. -->
<?php
    $str = "Hello world";

    if(preg_match("/^Hello/", $str)){
        echo "Valid";
    }else{
        echo "Not Valid";
    }
?>