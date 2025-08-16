<!-- 10 Create a php program and perform the followings:
• Create a link that sends your name and age to another page using the GET method.
• On the second page, display a greeting using the values passed in the URL -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["in1"];
        $age = $_GET["in2"];
        echo "Hello, $name! You are $age years old.";
    } else {
        echo "Invalid input.";
    }
?>