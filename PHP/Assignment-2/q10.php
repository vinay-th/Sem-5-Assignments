<!-- 0. Use of Built-in Functions
Objective: Accept a string and:
• Print length (strlen)
• Convert to uppercase (strtoupper)
• Reverse the string (strrev)
• Count words (str_word_count) -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["in"];
        echo "Length: " . strlen($inputString) . "<br/>";
        echo "Uppercase: " . strtoupper($inputString) . "<br/>";
        echo "Reversed: " . strrev($inputString) . "<br/>";
        echo "Word Count: " . str_word_count($inputString) . "<br/>";
    }
?>