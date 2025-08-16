<!-- Q4. Write a PHP program that shows even numbers from 1 to 20 using a while loop. -->
<?php
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
}
?>