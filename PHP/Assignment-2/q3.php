<!-- 3. Nested If – Grading System
Objective: Input marks and print grade:
• ≥ 90: A
• 75–89: B
• 50–74: C
• < 50: Fail -->
<?php
    if($_SERVER = "POST"){
        $marks = $_POST["in"];

        if($marks > 50){
            if($marks > 74){
                if($marks > 89){
                    echo "Grade A";
                } else{
                    echo "Grade B";
                }
            } else{
                echo "Grade B";
            }
        } else{
            echo "YOU FAILED";
        }
    }
?>