<!-- // 1. Validate Mobile Number:
// Write a PHP program using regex to check if a phone number contains exactly 10 digits -->
<?php
    function isNumberValid($num){
        if(preg_match("/^[0-9]{10}$/", $num)){
            return true;
        } else {
            return false;
        }
    }
    $number = "1234567890";
    if(isNumberValid($number)){
        echo "Valid Number";
    } else {
        echo "Invalid Number";
    }
?>