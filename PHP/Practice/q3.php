<!-- Create a form to enter a number between 1-12. Use switch-case in a separate PHP file to display the corresponding month name and number of days in that month. -->
<?php
    if($_SERVER["REQUEST_METHOD"] = "POST"){
        $month = $_POST["month"];

        echo "<h1>";
        switch($month){
            case 1:
                echo "January 31 days";
                break;
            case 2:
                echo "February 28/29 days";
                break;
            case 3:
                echo "March 31 days";
                break;
            case 4:
                echo "April 30 days";
                break;
            case 5:
                echo "May 31 days";
                break;
            case 6:
                echo "June 30 days";
                break;
            case 7:
                echo "July 31 days";
                break;
            case 8:
                echo "August 31 days";
                break;
            case 9:
                echo "September 30 days";
                break;
            case 10:
                echo "October 31 days";
                break;
            case 11:
                echo "November 30 days";
                break;
            case 12:
                echo "December 31 days";
                break;
        }
        echo "</h1>";
    }
?>