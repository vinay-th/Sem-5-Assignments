<!-- 5. Password Validation:
Create a regex that checks if a password is strong (at least 8 characters, one uppercase, one
lowercase, one number, one special character). -->

<?php
    $test = "Password_1";

    if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[._#@!$%&*])[a-zA-Z0-9._#@!$%&*]{8,}$/", $test)){
        echo "Valid";
    } else {
        echo "Not Valid";
    }
?>