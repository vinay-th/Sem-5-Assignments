<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "<h2>Thank you, $name, for registering with the email: $email</h2>";
}
?>