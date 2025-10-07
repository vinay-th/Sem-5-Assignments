<!-- Q-6 Make an associative array and sort based on semester.
SEM Marks
1 43
2 65
3 85
4 25
5 65 -->
<?php
    $sem_marks = array(
        "1" => 43,
        "2" => 65,
        "3" => 85,
        "4" => 25,
        "5" => 65
    );

    ksort($sem_marks);

    echo "<h3>Sorted Semester Marks:</h3>";
    foreach ($sem_marks as $sem => $marks) {
        echo "Semester " . $sem . ": " . $marks . "<br>";
    }
?>