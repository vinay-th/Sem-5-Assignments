<!-- Q:2 Take 2 Float values, display addition, multiplication, subtraction and
division of those values. -->
<html>
    <body>
        <?php
            // Define float constants
            const val1 = 11.11; // First float constant
            const val2 = 14.2857; // Second float constant

            // Perform arithmetic operations with normal variables
            $addition = val1 + val2;
            $subtraction = val1 - val2;
            $multiplication = val1 * val2;
            $division = val1 / val2;

            // Display the results
            echo "<h1>Results of Arithmetic Operations of Float Values: " . val1 . " and " . val2 . "</h1>";
            echo "<p>Addition: " . $addition . "</p>";
            echo "<p>Subtraction: " . $subtraction . "</p>";
            echo "<p>Multiplication: " . $multiplication . "</p>";
            echo "<p>Division: " . $division . "</p>";

        ?>
    </body>
</html>