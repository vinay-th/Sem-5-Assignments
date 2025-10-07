<!-- 2. Session Counter
• Create a program that counts how many times a user has refreshed a page using session
variables.
• Display the count value each time the page loads. -->
<?php
session_start();
    if (isset($_POST['reset'])) {
        session_unset();
        session_destroy();
        session_start();
    }

    if(!isset($_SESSION["count"])){
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"]++;

        echo $_SESSION["count"];
    }
?>

<a href="?reset=true">Reset</a>