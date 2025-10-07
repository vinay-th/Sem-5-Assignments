<!-- Q-11 Create an associative array which stores details of directions. Like Up=>North,
Down=>South, Left=>West, Right=>East. Display the keys and values separately. -->
<?php
    $directions = array(
        "Up" => "North",
        "Down" => "South",
        "Left" => "West",
        "Right" => "East"
    );

    echo "Keys:<br>";
    foreach ($directions as $key => $value) {
        echo $key . "<br>";
    }

    echo "Values:<br>";
    foreach ($directions as $key => $value) {
        echo $value . "<br>";
    }
?>