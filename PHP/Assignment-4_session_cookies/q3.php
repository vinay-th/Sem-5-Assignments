<!-- 3. Modify and Unset Session Variables
• Start a session and store name and email in session variables.
• Modify the email value on the next page.
• Later unset only the email variable while keeping name. -->
<?php
session_start();

if (!isset($_SESSION['name']) && !isset($_SESSION['email'])) {
    $_SESSION['name'] = 'Vikram Singh';
    $_SESSION['email'] = 'vikram@example.com';
}

if (isset($_POST['modify'])) {
    $_SESSION['email'] = 'vikram.singh@example.com';
}

if (isset($_POST['unset_email'])) {
    unset($_SESSION['email']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Variables</title>
</head>
<body>
    <h2>Session Variables</h2>
    <p>Name: <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Not set'; ?></p>
    <p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not set'; ?></p>
    <form method="POST" action="">
        <button type="submit" name="modify">Modify Email</button>
        <button type="submit" name="unset_email">Unset Email</button>
    </form>
</body>
</html>