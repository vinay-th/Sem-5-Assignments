<!-- Exercise 3: Insert Records (C of CRUD)
• Create an HTML form where the user enters name, email, and age.
• Write a PHP script to insert the form data into the students table.
• Display a confirmation message after successful insertion. -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', $age)";

            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Record inserted successfully');</script>";
            } else {
                echo "Error inserting record: " . mysqli_error($conn);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Insert Student Record</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
