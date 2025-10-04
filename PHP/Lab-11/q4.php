<!-- Exercise 4: Display Records (R of CRUD)
• Write a PHP script that retrieves all records from the students table using
mysql_query() and displays them in a table format.
• Use mysql_fetch_array() to fetch and display the rows. -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            echo "<table border='1' cellpadding='10'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                    </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['age'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    }
?>