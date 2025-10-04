<!-- Exercise 2: Creating a Table in PHP
• Create a PHP program that connects to MySQL and creates a table named students with
the following fields:
• id (INT, Primary Key, Auto Increment)
• name (VARCHAR(50))
• email (VARCHAR(100))
• age (INT) -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "CREATE TABLE students(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            age INT(3) NOT NULL
        )";

        if(mysqli_query($conn, $sql)) {
            echo "Table students created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
?>