<!-- Q2. Trimming Strings
Write a PHP program that removes:
• All leading spaces using ltrim()
• All trailing spaces using rtrim()
• All spaces from both ends using trim()
Display the results for each case. -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $str1 = $_POST["str1"];
        
        echo "For string \"$str1\":" . "<br/>";
        echo "All leading space trimmed: " . ltrim($str1) . "<br/>";
        echo "All trailing space trimmed: " . rtrim($str1) . "<br/>";
        echo "All space from both end trimmed: " . trim($str1) . "<br/>";
    }
?>