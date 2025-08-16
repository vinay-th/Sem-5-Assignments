<!-- Q7. Write a PHP program that prints numbers from 1 to 10, but stops when it reaches 5 using a break statement. -->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}
?>