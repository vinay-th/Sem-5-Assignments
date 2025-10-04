<!-- 5. Vehicle Showroom (Polymorphism & Inheritance)
Create a base class Vehicle with method displayInfo().
• Subclasses: Car, Bike, Truck overriding the method.
• Store all objects in an array and display details using a loop -->
<?php
    class Vehicle{
        protected $brand;
        protected $model;
        protected $price;

        public function __construct($brand, $model, $price) {
            $this->brand = $brand;
            $this->model = $model;
            $this->price = $price;
        }

        public function displayInfo() {
            echo "Vehicle Information<br/>";
        }
    }

    class Car extends Vehicle{
        public function displayInfo() {
            echo "<strong>Car:</strong> $this->brand $this->model - ₹$this->price<br/>";
        }
    }

    class Bike extends Vehicle{
        public function displayInfo() {
            echo "<strong>Bike:</strong> $this->brand $this->model - ₹$this->price<br/>";
        }
    }

    class Truck extends Vehicle{
        public function displayInfo() {
            echo "<strong>Truck:</strong> $this->brand $this->model - ₹$this->price<br/>";
        }
    }

    $v1 = new Car("Tesla", "Model 3", 3500000);
    $v2 = new Bike("Yamaha", "R15", 180000);
    $v3 = new Truck("Tata", "407", 1200000);


    $vehicles = [$v1, $v2, $v3];

    echo "------All Vehicles------" . "<br/>";

    foreach($vehicles as $vehicle){
        $vehicle->displayInfo();
        echo "<br/>";
    }
?>