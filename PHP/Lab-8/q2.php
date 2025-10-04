<!-- 2. Bank Account System (Constructors & Methods)
Create a BankAccount class with attributes accountNumber, balance.
• Constructor initializes account with balance.
• Methods: deposit(), withdraw(), and getBalance().
• Create 2 accounts and perform transactions -->

<?php
    class BankAccount{
        private $acc_num;
        private $balance;

        public function __construct($acc_num, $balance) {
            $this->acc_num = $acc_num;
            $this->balance = $balance;
        }

        public function deposit($amount){
            $this->balance += $amount;
            echo "$amount deposited successfully in account num: $this->acc_num" . "<br/>";
            echo "<br/>";
        }

        public function withdraw($amount){
            $this->balance -= $amount;
            echo "$amount withdrawn successfully from account num: $this->acc_num" . "<br/>";
            echo "<br/>";
        }

        public function getBalance(){
            echo "Account number: " . $this->acc_num . "<br/>";
            echo "Balance: " . $this->balance . "<br/>";
            echo "<br/>";
        }
    }

    
    $acc1 = new BankAccount("ACC001", 10000);
    $acc2 = new BankAccount("ACC002", 15000);

    echo "<h3>--- Account 1 Transactions ---</h3>";
    $acc1->deposit(5000);
    $acc1->withdraw(3000);
    $acc1->getBalance();

    echo "<h3>--- Account 2 Transactions ---</h3>";
    $acc2->deposit(2000);
    $acc2->withdraw(5000); // This will show insufficient balance
    $acc2->getBalance();
?>