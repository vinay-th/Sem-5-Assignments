<!-- 4. Cookie Creation & Expiry
• Create a cookie named user that stores a username for 1 day.
• Display the stored value on page refresh.
• Then delete the cookie by setting its expiry time in the past. -->
<?php
    $cookie_name = "user";
    $cookie_value = "Pako Patel";

    setcookie($cookie_name, $cookie_value, time() + (86400), "/"); 

    if(isset($_COOKIE[$cookie_name])) {
        echo "<h2>Welcome back!</h2>";
        echo "User: " . $_COOKIE[$cookie_name];
    } else {
        echo "<h2>Welcome!</h2>";
    }

    setcookie($cookie_name, "", time() - 3600, "/");
?>