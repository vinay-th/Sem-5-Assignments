<?php
ob_start();
session_start();

$remembered_user = isset($_COOKIE["user"]) ? $_COOKIE["user"] : "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $valid_username = "admin";
    $valid_password = "admin";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
        if (isset($_POST["remember"])) {
            setcookie("user", $username, time() + 86400, '/'); 
        } else {
            setcookie("user", "", time() - 3600, '/');
        }

        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Login</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username"
                    value="<?php echo htmlspecialchars($remembered_user); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember"
                    <?php echo $remembered_user ? "checked" : ""; ?>>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
