<!-- 8. Define an array of student names. Use foreach loop to display all names in an ordered list. Then add functionality to search for a specific student name. -->
<?php
    $students = array("A", "B", "C", "D", "E");

    // Display all student names
    echo "<ol>";
    foreach ($students as $student) {
        echo "<li>$student</li>";
    }
    echo "</ol>";

    // Search for a specific student name
    $search_name = "B";
    if (in_array($search_name, $students)) {
        echo "$search_name is enrolled in the class.";
    } else {
        echo "$search_name is not enrolled in the class.";
    }
?>