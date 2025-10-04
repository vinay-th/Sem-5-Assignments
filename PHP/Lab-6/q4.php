<!-- Question- 4: Multidimensional Arrays
1. Create a 2D array (3x3 matrix) and print it in matrix format.
2. Write a program to perform addition of two matrices using multidimensional arrays.
3. Create a 2D associative array to store the names and marks of students in 3 subjects and
calculate the total marks for each student. -->

<?php
    $mat = [[1,2,3],[4,5,6],[7,8,9]];

    foreach ($mat as $arr){
        foreach($arr as $val){
            echo $val . " ";
        }
        echo "<br/>";
    }

    $mat1 = [[1,2,3],[4,5,6],[7,8,9]];
    $mat2 = [[9,8,7],[6,5,4],[3,2,1]];
    $result = [[0,0,0],[0,0,0],[0,0,0]];
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            $result[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
        }
    }

    echo "<h2>Resultant Matrix after Addition</h2>";
    foreach ($result as $arr){
        foreach($arr as $val){
            echo $val . " ";
        }
        echo "<br/>";
    }

    $students = [
        [
            "Name" => "Rahul",
            "Maths" => 85,
            "Science" => 90,
            "English" => 88
        ],
        [
            "Name" => "Anjali",
            "Maths" => 92,
            "Science" => 81,
            "English" => 79
        ],
        [
            "Name" => "Vikram",
            "Maths" => 78,
            "Science" => 85,
            "English" => 80
        ]
    ];

    echo "<h2>Student Marks and Total</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
           <th>Name</th> 
           <th>Maths</th> 
           <th>Science</th> 
           <th>English</th>
           <th>Total</th> 
          </tr>";
    foreach($students as $student){
        $total = $student["Maths"] + $student["Science"] + $student["English"];
        echo "<tr>";    
        echo "<td>". $student["Name"] . "</td>";
        echo "<td>". $student["Maths"] . "</td>";
        echo "<td>". $student["Science"] . "</td>";
        echo "<td>". $student["English"] . "</td>";
        echo "<td>". $total . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>