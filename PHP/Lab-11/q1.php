<!-- Exercise 1: Connecting to MySQL
• Write a PHP program to connect to the MySQL server using mysql_connect() and
mysql_select_db().
• Display a message “Connection Successful” if the connection works, otherwise show an
error. -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection Successful";
    }
?>