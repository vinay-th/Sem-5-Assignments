# 14. Build a BankAccount class with withdraw and deposit methods. Use
# assert to ensure withdrawal amount is positive, raise to throw
# InsufficientBalanceError, and finally to log every transaction
# attempt to a text file.

class BankAccount:
    def __init__(self, id, name, balance):
        self.__id = id
        self.name = name
        self.__balance = balance

    def withdraw(self, amount):
        if amount > self.__balance:
            print("Insufficient Balance")
        else:
            self.__balance -= amount
            print(f"Amount: {amount} withdrawn successfully.")
            with open("transaction_log.txt", "a") as log_file:
                log_file.write(f"Withdrew {amount}. New balance: {self.__balance}\n")
    
    def deposit(self, amount):
        assert amount > 0, "Deposit amount must be positive"
        self.__balance += amount
        print(f"Amount: {amount} deposited successfully.")
        with open("transaction_log.txt", "a") as log_file:
            log_file.write(f"Deposited {amount}. New balance: {self.__balance}\n")

account = BankAccount(1, "Vinay Thakor", 1000)
account.deposit(500)
account.withdraw(200)
