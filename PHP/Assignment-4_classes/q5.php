<!-- 5. Abstract Class & Interface
• Create an abstract class Shape with abstract method calculateArea().
• Create two child classes Circle and Rectangle implementing calculateArea().
• Create an interface Drawable with method draw(). Implement it in both classes.
• Demonstrate with objects. -->
<?php
    abstract class Shape{
        abstract public function calculateArea();
    }

    interface Drawable{
        public function draw();
    }

    class Circle extends Shape implements Drawable{
        public $rad;

        function __construct($rad){
            $this->rad = $rad;
        }

        public function calculateArea(){
            $area = pi() * pow($this->rad, 2);
            return $area;
        }

        public function draw(){
            echo "Drawing a circle<br/>";
        }
    }

    class Rectangle extends Shape implements Drawable{
        public $length;
        public $width;

        function __construct($length, $width){
            $this->length = $length;
            $this->width = $width;
        }

        public function calculateArea(){
            $area = $this->length * $this->width;
            return $area;
        }

        public function draw(){
            echo "Drawing a rectangle<br/>";
        }
    }

    $circle = new Circle(5);
    echo "Area of Circle: " . $circle->calculateArea() . "<br/>";

    $rectangle = new Rectangle(4, 6);
    echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br/>";
    $rectangle->draw();
?>