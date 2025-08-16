<!-- 4 Take two numbers as PHP variables and perform basic arithmetic (add, subtract, multiply,
divide) and display the results in an HTML list. -->
<html>
    <body>
        <h2>
            <?php
                $num1 = 20;
                $num2 = 10;

                echo "Arithmetic operations on $num1 and $num2: ";
                echo "<ul>";
                echo "<li>Addition : ". $num1 + $num2 ."</li>";
                echo "<li>Subtraction : ". $num1 - $num2 ."</li>";
                echo "<li>Multiplication : ". $num1 * $num2 ."</li>";
                echo "<li>Division : ". $num1 / $num2 ."</li>";
                echo "</ul>";
            ?>
        </h2>
    </body>
</html>