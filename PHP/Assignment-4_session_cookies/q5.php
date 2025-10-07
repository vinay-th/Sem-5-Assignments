<!-- 5. Remember Me Feature (Cookie)
• Create a login form with a “Remember Me” checkbox.
• If checked, store the username in a cookie so that it auto-fills next time.
• If not checked, do not store any cookie. -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    if(isset($_POST["remember_me"])){
        setcookie("remember_me", "1", time() + (86400 * 30), "/"); 
        setcookie("name", $name, time() + (86400 * 30), "/"); 
    } else {
        setcookie("remember_me", "", time() - 3600, "/"); 
        setcookie("name", "", time() - 3600, "/"); 
    }
}
?>

<html>
    <form method="POST" action="">
        <?php
            if(isset($_COOKIE["remember_me"])){
                $name = $_COOKIE["name"];
                echo "<input type=\"text\" name=\"name\" value=\"$name\"/>";
            } else {
                echo "<input type=\"text\" name=\"name\"/>";
            }
        ?>
        <input type="checkbox" name="remember_me" value="1" <?php if (isset($_COOKIE["remember_me"])) echo "checked"; ?>/> Remember Me
        <input type="submit" value="Login"/>
    </form>
</html>