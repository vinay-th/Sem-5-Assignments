<!-- Q4. String Split and Word Count
Write a PHP program to:
• Split a string into an array of characters using str_split()
• Count the number of words in a sentence using str_word_count() -->
<?php
    $str1 = $_POST["str1"];

    $str_arr = str_split($str1);
    
    foreach($str_arr as $word){
        echo $word . " ";
    }

    echo "<br/>";

    echo "Word count of string: " . str_word_count($str1);
?>