<!-- Question-3: Associative Arrays
1. Create an associative array to store the following student details:
• Roll Number
• Name
• Course
• Marks
Display the values in a tabular format.
2. Extend the program to add 5 students and print the details of the student who scored the
highest marks. -->

<?php
    $students = [
        [
            "Roll Number" => 101,
            "Name" => "Rahul",
            "Course" => "B.Tech",
            "Marks" => 85
        ],
        [
            "Roll Number" => 102,
            "Name" => "Anjali",
            "Course" => "B.Sc",
            "Marks" => 92
        ],
        [
            "Roll Number" => 103,
            "Name" => "Vikram",
            "Course" => "B.Com",
            "Marks" => 78
        ],
        [
            "Roll Number" => 104,
            "Name" => "Sneha",
            "Course" => "B.A",
            "Marks" => 88
        ],
        [
            "Roll Number" => 105,
            "Name" => "Amit",
            "Course" => "B.Tech",
            "Marks" => 95
        ]
    ];

    # Tabular form
    echo "<h2>Student Details</h2>"; 
    echo "<table border='1' cellpadding='8' cellspacing='0'>"; 
    echo "<tr>
           <th>Roll Number</th> 
           <th>Name</th> 
           <th>Course</th> 
           <th>Marks</th> 
          </tr>";

    foreach($students as $student){
        echo "<tr>";
        echo "<td>". $student["Roll Number"] . "</td>";
        echo "<td>". $student["Name"] . "</td>";
        echo "<td>". $student["Course"] . "</td>";
        echo "<td>". $student["Marks"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";


    $highest = $students[0];
    foreach ($students as $student) { 
        if ($student["Marks"] > $highest["Marks"]) { $highest = $student; } 
    }

    echo "<h2>Topper Details</h2>"; 
    echo "Roll Number: " . $highest["Roll Number"] . "<br>"; 
    echo "Name: " . $highest["Name"] . "<br>"; 
    echo "Course: " . $highest["Course"] . "<br>"; 
    echo "Marks: " . $highest["Marks"] . "<br>"; 
?>