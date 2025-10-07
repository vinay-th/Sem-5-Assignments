<!-- 4. Cookie Creation & Expiry
• Create a cookie named user that stores a username for 1 day.
• Display the stored value on page refresh.
• Then delete the cookie by setting its expiry time in the past -->
<?php
if (isset($_POST['set_cookie'])) {
    setcookie('user', 'Vikram Singh', time() + 86400); // 1 day
    $_COOKIE['user'] = 'Vikram Singh'; 
}

if (isset($_POST['delete_cookie'])) {
    setcookie('user', '', time() - 3600); 
    unset($_COOKIE['user']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h2>Cookie Example</h2>
    <?php
    if (isset($_COOKIE['user'])) {
        echo "<p>Welcome back, " . $_COOKIE['user'] . "!</p>";
    } else {
        echo "<p>No user cookie set.</p>";
    }
    ?>
    <form method="POST" action="">
        <button type="submit" name="set_cookie">Set Cookie</button>
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>
</body>
</html>