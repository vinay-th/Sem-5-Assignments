<!-- 1. Session Login Example
• Create a login form (username & password).
• If correct, store the username in a session variable and display a welcome message.
• Provide a logout option that destroys the session. -->
<?php
session_start();
    function logout() {
        session_unset();
        session_destroy();
        echo "You have been logged out.";
    }

    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $valid_usr = "admin";
        $valid_pw = "admin";

        if($username === $valid_usr && $password === $valid_pw){
            $_SESSION['username'] = $username;
            echo "Welcome, " . $_SESSION['username'] . "! <a href='?logout=true'>Logout</a>";
        } else {
            echo "Invalid username or password.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>