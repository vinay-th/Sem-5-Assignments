<!-- Q-8 Create two dimension array and display it like matrix. Use table format -->
<?php
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    echo "<table border='1' cellpadding='10'>";
    foreach($matrix as $row) {
        echo "<tr>";
        foreach($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>