<!-- Class and Object Basics
Create a class Car with attributes: brand, model, and year.
• Add a method displayInfo() that prints car details.
• Create 2 objects and display their information. -->
<?php
    class Car{
        public $brand;
        public $model;
        public $year;

        function __construct($brand, $model, $year){
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        function displayInfo(){
            echo "Car Brand: " . $this->brand . "<br/>";
            echo "Car Model: " . $this->model . "<br/>";
            echo "Car Year: " . $this->year . "<br/>";
        }
    }

    $car1 = new Car("Toyota", "Camry", 2020);
    $car2 = new Car("Honda", "Civic", 2019);

    echo "<h3>Car 1 Details:</h3>";
    $car1->displayInfo();

    echo "<br/>";

    echo "<h3>Car 2 Details:</h3>";
    $car2->displayInfo();
?>