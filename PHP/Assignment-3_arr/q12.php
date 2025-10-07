<!-- Q-12 Create an associative array which stores details like "Newton"=>"Gravity",
"Albert"=>"Energy" ,"Edison"=> "Bulb","Tesla"=> "AC". Display array using foreach -->
<?php
    $scientists = array(
        "Newton" => "Gravity",
        "Albert" => "Energy",
        "Edison" => "Bulb",
        "Tesla" => "AC"
    );

    foreach ($scientists as $name => $invention) {
        echo $name . " => " . $invention . "<br>";
    }
?>