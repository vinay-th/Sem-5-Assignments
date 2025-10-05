# 3. Write a python program to create a class Bank with following members:
#  Id- Private
#  Name -Protected
#  Balance – Public
# Member Functions:
# • Constructor to initialize balance as 1000.
# Create another class named Customer and add following methods:
# withdraw() - To withdraw money
# deposit() - To deposit money
# interest() - calculate interest
# Call all the methods appropriately and print Id, Name and Balance.
class Bank:
    def __init__(self, id, name):
        self.__id = id
        self._name = name
        self.balance = 1000

    def get_id(self):
        return self.__id

    def get_name(self):
        return self._name

    def get_balance(self):
        return self.balance

class Customer(Bank):
    def withdraw(self, amount):
        if amount > self.balance:
            print("Insufficient Funds.")
        else:
            self.balance -= amount
            print(f"Withdrew {amount}. New balance: {self.balance}")
    
    def deposit(self, amount):
        if amount <= 0:
            print("Invalid amount.")
        else:
            self.balance += amount
            print(f"Deposited {amount}. New balance: {self.balance}")

    def interest(self, rate, year = 1):
        interest_amount = self.balance * rate * year / 100
        self.balance += interest_amount

        print(f"Interest added: {interest_amount}. New balance: {self.balance}")

cust = Customer(101, "Vinay")
cust.deposit(50000)
cust.withdraw(10000)
cust.interest(12, 2)

print("Id:", cust.get_id())
print("Name:", cust.get_name())
print("Balance:", cust.get_balance())