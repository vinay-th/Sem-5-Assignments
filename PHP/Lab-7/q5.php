<!-- Q5. String Search and Replace
Write a PHP program that:
• Finds the position of the word "PHP" in the string "I love PHP programming" using strpos()
• Replaces the word "PHP" with "Python" using str_replace() -->
<?php
    $str = "I love PHP programming";

    echo "Pos of PHP in str: " . strpos($str, "PHP");
    echo "<br/>";
    $str = str_replace("PHP" , "Python", $str);
    
    echo "Replaced word \"PHP\" with \"Python\": " . $str;
?>