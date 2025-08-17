<!-- 9. Create a function that accepts a number and returns whether it's prime or not. Make an HTML form to test this function with different numbers. -->
<?php
    function isPrime($num){
        if($num > 1){
            for($i = 2; $i <= $num ** 0.5; $i++){
                if($num % $i == 0){
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }

    $num = 2;
    if(isPrime($num)){
        echo "$num is prime";
    }else{
        echo "$num is not prime";
    }
?>