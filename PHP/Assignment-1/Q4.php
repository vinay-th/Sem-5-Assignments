<!-- Q:4 Take 5 string variables, concate them and display it individualy and
concatinated sentence in a table. -->
<html>
    <head>
        <title>Assignment 1 - Question 4</title>
    </head>
    <body>
        <?php
            // Define string variables
            $str1 = "Vinay";
            $str2 = "Niomi";
            $str3 = "Sarthak";
            $str4 = "Vansh";
            $str5 = "Malika";

            // Concatenate strings
            $result = $str1 . " " . $str2 . " " . $str3 . " " . $str4 . " " . $str5;

            // Display individual strings
            echo "<h1>Individual Strings:</h1>";
            echo "<ul>";
            echo "<li>" . $str1 . "</li>";
            echo "<li>" . $str2 . "</li>";
            echo "<li>" . $str3 . "</li>";
            echo "<li>" . $str4 . "</li>";
            echo "<li>" . $str5 . "</li>";
            echo "</ul>";

            // Display concatenated result in a table
            echo "<h1>Concatenated Result:</h1>";
            echo "<table border='1'>";
            echo "<tr><th>Concatenated String</th></tr>";
            echo "<tr><td>" . $result . "</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>