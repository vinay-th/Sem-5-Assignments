<!-- String Functions
Q1. String Length and Reverse
Write a PHP program that accepts a string from the user and:
• Displays its length using strlen()
• Displays the reversed string using strrev() -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $str1 = $_POST["str1"];

        echo "The length of string \"$str1\": " . strlen($str1) . "<br/>";
        echo "The reverse of string \"$str1\": " . strrev($str1);
    }
?>