<!-- 6. Make a PHP program that prints numbers from 1 to 20 using a do-while loop, but skips multiples of 3 using the continue statement. -->
<?php
    $i = 1;
    do{
        if($i % 3 == 0){
            $i++;
            continue;
        } else {
            echo "$i ";
            $i++;
        }
    }while($i <= 20);
?>