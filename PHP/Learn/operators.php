<html>
    <?php
        $a = 10; // integer variable
        $b = 20.5; // float variable

        echo "<h2>Addition: ".($a + $b)."</h2>";
        echo "<h2>Subtraction: ".($a - $b)."</h2>";
        echo "<h2>Multiplication: ".($a * $b)."</h2>";
        echo "<h2>Division: ".($a / $b)."</h2>";
        echo "<h2>Modulus: ".($a % $b)."</h2>";
        echo "<h2>Exponentiation: ".($a ** 2)."</h2>";
        echo "<h2>Increment: ".(++$a)."</h2>";


        if ($a > $b) {
            echo "<h2>$a is greater than $b</h2>";
        } elseif ($a < $b) {
            echo "<h2>$a is less than $b</h2>";
        } else {
            echo "<h2>$a is equal to $b</h2>";
        }
    ?>
</html>