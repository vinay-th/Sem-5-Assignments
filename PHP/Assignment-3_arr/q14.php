<!-- Q-14 Create an associative array of $salaries = array("atul" => 2000, "ravi => 1000, "rahul" =>
500). Perform asort(), arsort(), ksort(), krsort(). -->
<?php
    $salaries = array(
        "atul" => 2000,
        "ravi" => 1000,
        "rahul" => 500
    );

    echo "Original Array:<br>";
    foreach ($salaries as $name => $salary) {
        echo $name . " => " . $salary . "<br>";
    }

    // Sort by values in ascending order
    asort($salaries);
    echo "<br>Array sorted by values (asort):<br>";
    foreach ($salaries as $name => $salary) {
        echo $name . " => " . $salary . "<br>";
    }

    // Sort by values in descending order
    arsort($salaries);
    echo "<br>Array sorted by values (arsort):<br>";
    foreach ($salaries as $name => $salary) {
        echo $name . " => " . $salary . "<br>";
    }

    // Sort by keys in ascending order
    ksort($salaries);
    echo "<br>Array sorted by keys (ksort):<br>";
    foreach ($salaries as $name => $salary) {
        echo $name . " => " . $salary . "<br>";
    }

    // Sort by keys in descending order
    krsort($salaries);
    echo "<br>Array sorted by keys (krsort):<br>";
    foreach ($salaries as $name => $salary) {
        echo $name . " => " . $salary . "<br>";
    }
?>