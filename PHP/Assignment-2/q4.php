<!-- 4. Switch Case – Day of the Week
Objective: Write a program that takes a number (1–7) and prints the corresponding day of the week
using switch case. -->
<?php
    if($_SERVER = "POST"){
        $num = $_POST["in"];

        switch ($num) {
            case '1':
                echo "Sunday";
                break;
            case '2':
                echo "Monday";
                break;
            case '3':
                echo "Tuesday";
                break;
            case '4':
                echo "Wednesday";
                break;
            case '5':
                echo "Thursday";
                break;
            case '6':
                echo "Friday";
                break;
            case '7':
                echo "Saturday";
                break;
            default:
                echo "Not a valid number";
                break;
        }
    }
?>