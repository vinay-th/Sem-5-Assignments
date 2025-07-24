<!-- Q:3 Take 3 string variables, concate them and display using echo and print. -->
<html>
    <head>
        <title>Assignment 1 - Question 3</title>
    </head>
    <body>
        <?php
            // Define string variables
            $string1 = "Hello";
            $string2 = "World";
            $string3 = "!";

            // Concatenate strings with the dot operator
            $result = $string1 . " " . $string2 . $string3;

            // Display the result using echo
            echo "<h1>Concatenated String using Echo:</h1>";
            echo "<h2>" . $result . "</h2>";

            // Display the result using print
            print "<h1>Concatenated String using Print:</h1>";
            print "<h2>" . $result . "</h2>";
        ?>
    </body>
</html>