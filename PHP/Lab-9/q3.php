<!-- 3. Validate a Phone Number Only allows 10 digits. -->
<?php
    $phone_num = "1234567890"; 
    if(preg_match("/^\d{10}$/", $phone_num)){
        echo "Valid phone number.";
    } else{
        echo "Invalid phone number.";
    }
?>