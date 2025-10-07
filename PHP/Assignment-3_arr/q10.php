<!-- Q-10 Create an associative array which consists of student data like student name and create sub
array which stores details of subject and its marks using associative array and display them
using foreach/for loop. -->
<?php
    $student = array(
        "name" => "Vinay Thakor",
        "age" => 20,
        "subjects" => array(
            "Math" => 85,
            "Science" => 90,
            "History" => 78,
            "English" => 88
        )
    );

    echo "Student Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Subjects and Marks: <br>";

    foreach($student["subjects"] as $subject => $marks) {
        echo $subject . ": " . $marks . "<br>";
    }
?>