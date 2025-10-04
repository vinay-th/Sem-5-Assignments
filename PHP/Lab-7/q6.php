<!-- Q6. Tokenizing a String
Write a PHP program to tokenize the string:
"Name,Age,Course,Grade"
using strtok() with a comma , as the delimiter, and print each token separately -->
<?php
    $str = "Name,Age,Course,Grade";

    $token = strtok($str, ",");

    while($token !== false){
        echo $token . "<br/>";
        $token = strtok(",");
    }
?>