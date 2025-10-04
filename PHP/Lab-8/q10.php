<!-- 10. Shape Area Calculator (Abstract + Interface)
• Abstract class Shape with abstract method area().
• Interface Printable with method printDetails().
• Implement Circle, Square, Triangle.
• Demonstrate with multiple shapes in an array, showing polymorphism.
-->
<?php
    abstract class Shape{
        abstract function area();
    }

    interface Printable{
        public function printDetails();
    }

    class Circle extends Shape implements Printable{
        private $radius;

        public function __construct($radius){
            $this->radius = $radius;
        }

        public function area(){
            return pi() * pow($this->radius, 2);
        }

        public function printDetails(){
            echo "<strong>Circle</strong> with radius {$this->radius} has area: " . round($this->area(), 2) . "<br/>";
        }
    }

    class Square extends Shape implements Printable{
        private $side;

        public function __construct($side){
            $this->side = $side;
        }

        public function area(){
            return pow($this->side, 2);
        }

        public function printDetails(){
            echo "<strong>Square</strong> with side {$this->side} has area: " . $this->area() . "<br/>";
        }
    }

    class Triangle extends Shape implements Printable{
        private $height;
        private $base;

        public function __construct($height, $base){
            $this->height = $height;
            $this->base = $base;
        }

        public function area(){
            return 0.5 * $this->height * $this->base;
        }

        public function printDetails(){
            echo "<strong>Triangle</strong> with height {$this->height} and base {$this->base} has area: " . $this->area() . "<br/>";
        }
    }

    $shapes = [
        new Circle(5),
        new Square(4),
        new Triangle(3, 6)
    ];

    foreach($shapes as $shape){
        $shape->printDetails();
    }
?>