<!-- 2. Validate an Email:
Definition: Checks and Matches standard email format. -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['text'];
        if(preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
            echo "Valid email format.";
        } else{
            echo "Invalid email format.";
        }
    }
?>