<!-- 2. If-Else – Age Eligibility
Objective: Accept age from the user and check if the person is eligible to vote (age ≥ 18).
Input: Age through a form.
Output: "Eligible to Vote" or "Not Eligible". -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["in"];
        if ($age >= 18) {
            echo "Eligible to Vote";
        } else {
            echo "Not Eligible";
        }
    }
?>