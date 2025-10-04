<!-- 3. Modify and Unset Session Variables
• Start a session and store name and email in session variables.
• Modify the email value on the next page.
• Later unset only the email variable while keeping name. -->

<?php
session_start();

$_SESSION['name'] = "Pako Patel";
$_SESSION['email'] = "pako@patel.com";

echo "<h2>Session Variables Set</h2>";
echo "Name: " . $_SESSION['name'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";

echo '<a href="page2.php">Go to Modify Page</a>';
?>