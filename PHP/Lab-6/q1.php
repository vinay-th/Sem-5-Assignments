<!-- Question-1: Introduction & Creating Arrays
1. Write a program to create an array of 5 integers and display all values.
2. Modify the program to accept array elements from user input and print them in reverse
order. -->
<?php
    // Part 1: Create an array of 5 integers and display all values
    $ints = array(10, 20, 30, 40, 50);
    echo "Array values: ";

    foreach ($ints as $val){
        echo $val . " ";
    }

    echo "<br>";    

    // Part 2: Accept array elements from user input and print them in reverse order
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $userArray = array();
        for ($i = 0; $i < 5; $i++){
            $userArray[] = $_POST["num" . $i];
        }

        echo "Array in reverse order: ";
        for ($i = 4; $i >= 0; $i--){
            echo $userArray[$i] . " ";
        }
    }
?>