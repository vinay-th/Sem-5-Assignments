<!-- 6. Split a String by Multiple Delimiters -->
<?php
    $string = "apple,banana;orange|grape+litchi:melon";
    $parts = preg_split("/[;, |:+]+/", $string);

    echo "Original String: $string<br/>";
    echo "After Splitting:<br/>";
    foreach ($parts as $word) {
        echo $word . "<br/>";
    }
?>