<!-- 2. Make an HTML form with fields for student name and marks in 4 subjects (Physics, Chemistry, Biology, Math). In another PHP file, calculate total, percentage, and assign grade using nested if-else (A≥90, B≥80, C≥70, D≥60, F<60). -->
<?php
    if($_SERVER["REQUEST_METHOD"] = "POST"){
        $name = $_POST["name"];
        $phy = $_POST["phy"];
        $che = $_POST["che"];
        $mat = $_POST["mat"];
        $bio = $_POST["bio"];

        $total = $phy + $che + $mat + $bio;
        $percentage = $total / 4;

        echo "<h1>Grades of $name</h1>";
        echo "<h3>Total: <b>$total / 400</b></h3>";
        echo "<h3>Percentage: <b>$percentage %</b></h3>";

        if($percentage >= 60){
            if($percentage >= 70){
                if($percentage >= 80){
                    if($percentage >= 90){
                        echo "<h2>Grade: <b>A</b></h2>";
                    }else{
                        echo "<h2>Grade: <b>B</b></h2>";
                    }
                }else{
                    echo "<h2>Grade: <b>C</b></h2>";
                }
            }else{
                echo "<h2>Grade: <b>D</b></h2>";
            }
        }else{
            echo "<h2>Grade: <b>F</b></h2>";
        }
    }
?>