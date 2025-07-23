<html>
    <?php
        echo "<h2>For Loop Example</h2>";
        // For loop to print numbers from 1 to 5
        for ($i = 1; $i <= 5; $i++) {
            echo "$i ";
        }

        echo "<h2>While Loop Example</h2>";
        // While loop to print numbers from 1 to 5
        $j = 1;
        while ($j <= 5) {
            echo "$j ";
            $j++;
        }

        echo "<h2>Do-While Loop Example</h2>";
        // Do-while loop to print numbers from 1 to 5
        $k = 1;
        do {
            echo "$k ";
            $k++;
        } while ($k <= 5);
    ?>
</html>