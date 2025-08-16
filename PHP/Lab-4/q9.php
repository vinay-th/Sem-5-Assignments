<!-- Q9. Make an HTML form to enter marks for Math, Science, and English. In another
PHP file:
• Find total and percentage
• Use nested if-else to give a grade (A, B, C, etc.) -->
<form action="" method="post">
    Math: <input type="number" name="math" required><br>
    Science: <input type="number" name="science" required><br>
    English: <input type="number" name="english" required><br>
    <input type="submit" value="Submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $math = $_POST["math"];
        $science = $_POST["science"];
        $english = $_POST["english"];

        $total = $math + $science + $english;
        $percentage = $total / 3;

        if ($percentage >= 90) {
            $grade = "A";
        } elseif ($percentage >= 80) {
            $grade = "B";
        } elseif ($percentage >= 70) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        echo "Total Marks: " . $total . "<br>";
        echo "Percentage: " . $percentage . "%<br>";
        echo "Grade: " . $grade . "<br>";
    }
?>