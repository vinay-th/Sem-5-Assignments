<!-- 9. Pass by Value vs Reference
Objective: Create two functions:
• One that accepts a variable by value and changes it.
• Another that accepts a variable by reference and changes it.
Observe the difference in behavior -->
<?php
    function passByValue($value) {
        $value += 10;
        return $value;
    }

    function passByReference(&$value) {
        $value += 10;
    }

    $originalValue = 5;
    $newValue = passByValue($originalValue);
    echo "After passByValue: original = $originalValue, new = $newValue<br/>";

    passByReference($originalValue);
    echo "After passByReference: original & final = $originalValue<br/>";
?>