<!-- 9. E-Commerce Cart System
Create a class CartItem with name, price, quantity.
• Add a method getTotalPrice().
• Create multiple cart items and calculate grand total. -->
<?php
    class CartItem {
        private $name;
        private $price;
        private $quantity;

        public function __construct($name, $price, $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function getTotalPrice() {
            return $this->price * $this->quantity;
        }

        public function getName() {
            return $this->name;
        }
    }

    $item1 = new CartItem("Laptop", 50000, 1);
    $item2 = new CartItem("Smartphone", 20000, 2);
    $item3 = new CartItem("Headphones", 3000, 3);

    $cartItems = [$item1, $item2, $item3];
    $grandTotal = 0;

    echo "------Cart Items------" . "<br/>";
    foreach($cartItems as $item) {
        $totalPrice = $item->getTotalPrice();
        echo $item->getName() . ": ₹" . $totalPrice . "<br/>";
        $grandTotal += $totalPrice;
    }
    echo "<b>Grand Total: ₹" . $grandTotal . "<br/></b>";
?>