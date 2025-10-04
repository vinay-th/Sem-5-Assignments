<!-- 9. Strong Password Validation:
 Must contain:
• At least 1 uppercase
• At least 1 lowercase
• At least 1 number
• At least 1 special character
• Minimum 8 characters -->

<?php
    $pass = "Abc@1234";

    if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pass)){
        echo "Strong Password";
    } else {
        echo "Weak Password";
    }
?>