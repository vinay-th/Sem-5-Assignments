<!-- 4. Email Validation:
Write a regex in PHP to validate an email ID. -->
<?php
    $test = "guddu@pandit.com";

    if(preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/", $test)){
        echo "Valid";
    } else {
        echo "Not Valid";
    }
?>