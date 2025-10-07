<!-- 6. Student Registation Form:
Preaper a Final Registration Form with all availbale validation in php. -->
<html>
  <head>
    <title>Student Registration Form</title>
  </head>
  <body>
    <h2>Student Registration Form</h2>
    <form action="q6.php" method="post">
      <label for="name">Full Name:</label><br />
      <input type="text" id="name" name="name" required /><br /><br />

      <label for="email">Email:</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="password">Password:</label><br />
      <input
        type="password"
        id="password"
        name="password"
        required
        minlength="6"
      /><br /><br />

      <label for="dob">Date of Birth:</label><br />
      <input type="date" id="dob" name="dob" required /><br /><br />
      <label for="gender">Gender:</label><br />
      <input type="radio" id="male" name="gender" value="male" required />
      <label for="male">Male</label><br />
      <input type="radio" id="female" name="gender" value="female" required />
      <label for="female">Female</label><br />

      <input type="submit" value="Register" />
    </form>
  </body>
</html>

<?php
  function validate_name($name) {
    return preg_match("/^[a-zA-Z ]+$/", $name);
  }

  function validate_email($email) {
    return preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/", $email);
  }

  function validate_password($password) {
    return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[._#@!$%&*])[a-zA-Z0-9._#@!$%&*]{8,}$/", $password);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    validate_name($name) or die("Invalid Name. Only letters and spaces are allowed.");
    validate_email($email) or die("Invalid Email format.");
    validate_password($password) or die("Weak Password. It must be at least 8 characters long and include uppercase, lowercase, number, and special character.");
  }
?>