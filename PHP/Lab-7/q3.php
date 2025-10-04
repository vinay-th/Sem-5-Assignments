<!-- Q3. Case Conversion
Write a PHP program that accepts a string and:
• Converts it to uppercase using strtoupper()
• Converts it to lowercase using strtolower()
• Capitalizes the first character of each word using ucwords()
• Capitalizes the first character of the string using ucfirst() -->
<?php
    $str1 = $_POST["str1"];

    echo "String \"$str1\" in uppercase: " . strtoupper($str1) . "<br/>";
    echo "String \"$str1\" in lowercase: " . strtolower($str1) . "<br/>";
    echo "String \"$str1\" first character of each word in uppercase: " . ucwords($str1) . "<br/>";
    echo "String \"$str1\" first character of str in uppercase: " . ucfirst($str1) . "<br/>";
?>