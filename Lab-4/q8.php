<!-- Q8. Write a PHP program to print numbers from 1 to 5, but skip 3 using a continue statement. -->
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}
?>