<!-- 3. Product Inventory (Static & Constants)
Create a class Product with attributes name, price.
• Add a static property count to track number of products created.
• Define a constant DISCOUNT = 0.1.
• Method to calculate final price after discount.
• Show total number of products created. -->
<?php
    class Product{
        private $name;
        private $price;
        static $count = 0;
        const discount = 0.1;

        public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;

            self::$count++;
        }

        public function getFinalPrice(){
            $discountedAmt = $this->price * self::discount;
            $finalPrice = $this->price - $discountedAmt;

            return $finalPrice;
        }

        public function showDetails(){
            echo "Name of product is: " . $this->name . "<br/>";
            echo "Original price of product is: " . $this->price . "<br/>";
            echo "Your final price is: " . $this->getFinalPrice() . "<br/>";
        }
    }

    $prod1 = new Product("Laptop", 50000);
    $prod2 = new Product("Mobile", 20000);
    $prod3 = new Product("Tablet", 15000);

    echo "<h3>Product Details:</h3>";
    $prod1->showDetails();
    echo "<br/>";
    $prod2->showDetails();
    echo "<br/>";
    $prod3->showDetails();
?>