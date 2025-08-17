<!-- Write a PHP program that accepts a number through an HTML form and displays its multiplication table (1-10) using a for loop. Format the output as a proper table. -->
<form action="" method="post">
    <label for="num">Enter number: </label>
    <input name="num" id="num" type="number"/>
    <br/>
    <input type="submit" value="Get multiplication table"/>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] = "POST"){
        $num = $_POST["num"];

        echo "<table border=1>";
        echo "
        <tr>
            <th>Number</th>
            <th>Multiplier</th>
            <th>Number</th>
        </tr>
        ";
        for($i = 1; $i <= 10; $i++){
            $res = $num * $i;
            echo "
            <tr>
                <td>$num</td>
                <td>$i</td>
                <td>$res</td>
            </tr>
            ";
        }
        echo "</table>";
    }
?>