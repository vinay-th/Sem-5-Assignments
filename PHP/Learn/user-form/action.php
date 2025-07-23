<html>
    <?php
        // works without htmlspecialchars too
        // use POST method to get data from the form
        // name of input fields should match the keys in $_POST array

        $name = htmlspecialchars($_POST['username']); // Sanitize user input to prevent XSS attacks
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // Display the submitted data
        echo "<h2>Form Submission Successful</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    ?>
</html>