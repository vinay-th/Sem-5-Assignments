<!-- 7. Online Payment System (Interface)
Create an interface PaymentGateway with method processPayment($amount).
• Implement it in classes PayPal and CreditCard.
• Create objects and process payments. -->
<?php
    interface PaymentGateway {
        public function processPayment($amount);
    }

    class PayPal implements PaymentGateway {
        public function processPayment($amount) {
            echo "Processing PayPal payment of $$amount<br/>";
        }
    }

    class CreditCard implements PaymentGateway {
        public function processPayment($amount) {
            echo "Processing Credit Card payment of $$amount<br/>";
        }
    }

    $paypalPayment = new PayPal();
    $creditCardPayment = new CreditCard();

    $paypalPayment->processPayment(100);
    $creditCardPayment->processPayment(250);
?>