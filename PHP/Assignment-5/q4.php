<h2>Sign Up</h2>
<h4>It's Free and always will be.</h4>
<form action="" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required>
    <br>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required>
    <br>
    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="re-email">Re-Enter your Email:</label>
    <input type="email" id="re-email" name="re-email" required>
    <br>
    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="gender">You are: </label>
    <select id="gender" name="gender" required>
        <option value="Male">
            Male
        </option>
        <option value="Female">
            Female
        </option>
    </select>
    <br>
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>
    <br>
    <input type="submit" name="submit" value="Sign Up">
</form>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $re_email = $_POST['re-email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if ($email !== $re_email) {
        echo "<h3 style='color:red;'>Error: Emails do not match.</h3>";
    } else {
        echo "<h3>Registration Successful!</h3>";
        echo "<p><strong>First Name:</strong> " . htmlspecialchars($fname) . "</p>";
        echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lname) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "</p>";
    }
}
?>