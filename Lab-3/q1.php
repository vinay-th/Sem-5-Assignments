<!-- 1 Create form for following using form and table tag. (call on same page) -->
<html>
    <body>
        <form method="post" action="">
            <label for="in1">Enter the First Number:</label>
            <input type="number" name="in1" required>
            <br/>
            <label for="in2">Enter the Second Number:</label>
            <input type="number" name="in2" required>
            <br/>
            <button>Add</button>
            <br/>
            <label>The sum is: </label>
            <input value="<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['in1'];
                    $num2 = $_POST['in2'];
                    $sum = $num1 + $num2;
                    echo $sum;
                }
            ?>" readonly>
        </form>
    </body>
</html>