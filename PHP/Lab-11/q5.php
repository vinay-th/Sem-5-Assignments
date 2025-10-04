<!-- Exercise 5: Update and Delete Records (U & D of CRUD)
• Extend the previous program:
• Add a button/link to update a student’s age by entering a new value.
• Add a button/link to delete a student’s record based on their id.
• Ensure the changes reflect in the MySQL database. -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // Update Record
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
            $id = $_POST['id'];
            $new_age = $_POST['new_age'];

            $sql = "UPDATE students SET age=$new_age WHERE id=$id";

            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Record updated successfully');</script>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        // Delete Record
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM students WHERE id=$id";

            if(mysqli_query($conn, $sql)) {
                echo "<script>alert('Record deleted successfully');</script>";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
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
    <title>Manage Student Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Manage Student Record</h2>
        <form action="" method="POST">
            <?php
                $sql = "SELECT * FROM students";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    echo "<table class='table table-bordered'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['age'] . "</td>
                                <td>
                                    <input type='number' name='new_age' placeholder='New Age' required>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit' name='update' class='btn btn-warning btn-sm'>Update Age</button>
                                    <button type='submit' name='delete' class='btn btn-danger btn-sm'>Delete</button>
                                </td>
                              </tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "No records found.";
                }
            ?>
        </form>
    </div>
</body>
</html>