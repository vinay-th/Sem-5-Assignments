<!-- Q11. Make an HTML form to enter a word. In another PHP file:
• Create a function that returns the reverse of the word
• Display it -->

<form action="" method="post">
    Word: <input type="text" name="word" required>
    <input type="submit" value="Submit">
</form>

<?php
function reverseString($str) {
    return strrev($str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];
    $reversed = reverseString($word);
    echo "The reverse of '$word' is: $reversed";
}
?>