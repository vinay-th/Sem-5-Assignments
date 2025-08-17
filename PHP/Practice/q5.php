<!-- 5. Create a form to enter a starting and ending number. In the PHP file, use a while loop to display all odd numbers between those two numbers. -->
<form action="" method="post">
    <h1>Ranged odd number printer: </h1>
    <label for="start">Start number: </label>
    <input id="str" name="str" type="number"/>
    <br/>
    <label for="end">End number: </label>
    <input id="end" name="end" type="number"/>
    <br/>
    <input type="submit" name="submit_form" value="Get odd numbers"/>
</form>

<hr>
<h2>Numbers: </h2>

<?php
    if(isset($_POST["submit_form"])){
        $start = $_POST["str"];
        $end = $_POST["end"];

        for($i = $start; $i <= $end; $i++){
            if($i % 2 != 0){
                echo "$i ";
            }
        }
    }
?>