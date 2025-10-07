<!-- 3. Class Constants & Static Methods
Create a class MathOperations with:
• A constant PI = 3.14159.
• A static method areaOfCircle($radius) that calculates area using PI.
• Call the static method without creating an object. -->
<?php
    class MathOperations{
        const PI = 3.14159;

        public static function areaOfCircle($radius){
            $area = self::PI * pow($radius, 2);
            $area = number_format($area, 2);

            echo "Area of circle with radius " . $radius . " is: " . $area . "<br/>";
        }
    }

    MathOperations::areaOfCircle(5);
    MathOperations::areaOfCircle(10);
?>
