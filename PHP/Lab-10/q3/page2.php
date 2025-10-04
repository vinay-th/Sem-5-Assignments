<?php
session_start();
    if(isset($_SESSION['email'])){
        $_SESSION['email'] = "pako@patel2.com";
    }

    echo "<h2>Session Variables Modified</h2>";
    echo "Name: " . $_SESSION['name'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
?>